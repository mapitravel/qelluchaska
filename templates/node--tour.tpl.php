<?php
/**
 * @file
 * Zen theme's implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   - view-mode-[mode]: The view mode, e.g. 'full', 'teaser'...
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content. Currently broken; see http://drupal.org/node/823380
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess_node()
 * @see template_process()
 */
 
 global $base_root;
 $path = $base_root . $node_url;
?>
<article id="node-<?php print $node->nid; ?>" class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div id="node-inner"> <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
    <?php print render($title_prefix); ?>
    <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    </header>
    <?php print render($title_suffix); ?>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <div class="content"<?php print $content_attributes; ?>>
      <section id="tour-bar">
      	<div class="bar-reserva">
        	<h5><?php print t('Book now!'); ?></h5>
            <a href="/sites/all/themes/qelluchaska/chats/chat.php" class="button action live-chat"><?php print t('Chat now!'); ?></a>
            <a href="http://media.perunoticias.net/html/skype.html" class="button no-action live-skype"><?php print t('Call us!'); ?></a>
        </div>
        <div class="bar-social">
          <h5><?php print t('Share this tour:') ?></h5>
          <ul>
            <li class="social">
              <g:plus action="share" annotation="bubble" height="15" href="<?php print $path; ?>"></g:plus>
            </li>
            <li class="social">
              <fb:like href="<?php print $path; ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like>
            </li>
            <li class="social"><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php print $path; ?>" data-count="horizontal" data-via="MapiTravel4All" data-lang="<?php print $GLOBALS['twlang']; ?>">Tweet</a></li>
          </ul>
        </div>
        
        <?php if(isset($field_en['und']) || isset($field_br['und'])) : ?>
        <div class="bar-langs">
          <h5><?php print t('Also available in:'); ?></h5>
          <ul>
            <?php if(isset($field_en['und'][0]['value'])) : ?>
            <li><a href="<?php print $field_en['und'][0]['value'];?>"><img class="lang-en" src="http://media.perunoticias.net/images/iconos/flag-lang-en.png" /> <?php print t('English'); ?></a></li>
            <?php endif; ?>
            <?php if(isset($field_br['und'][0]['value'])) : ?>
            <li><a href="<?php print $field_br['und'][0]['value'];?>"><img class="lang-br" src="http://media.perunoticias.net/images/iconos/flag-lang-br.png" /> <?php print t('Portuguese'); ?></a></li>
            <?php endif; ?>
            <?php if(isset($field_es['und'][0]['value'])) : ?>
            <li><a href="<?php print $field_es['und'][0]['value'];?>"><img class="lang-br" src="http://media.perunoticias.net/images/iconos/flag-lang-br.png" /> <?php print t('Spanish'); ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
        <?php endif; ?>
      </section>
      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    </div>
    <div class="meta"> <?php print render($content['links']); ?> <?php print render($content['comments']); ?> </div>
    <div class="fb-comments" data-href="<?php print $path; ?>" data-num-posts="5" data-width="635"></div>
  </div>
</article>
<!-- /.node --> 
