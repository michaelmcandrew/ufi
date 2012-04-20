<?php
// $Id: twitter-pull-listing.tpl.php,v 1.2.2.3 2011/01/11 02:49:27 inadarei Exp $

/**
 * @file
 * Theme template for a list of tweets.
 *
 * Available variables in the theme include:
 *
 * 1) An array of $tweets, where each tweet object has:
 *   $tweet->id
 *   $tweet->username
 *   $tweet->userphoto
 *   $tweet->text
 *   $tweet->timestamp
 *
 * 2) $twitkey string containing initial keyword.
 *
 * 3) $title
 *
 */
?>
<div class="tweets-pulled-listing">
  <?php if (is_array($tweets)): ?>
    <?php $tweet_count = count($tweets); ?>
    <ul class="tweets slides">
    <?php foreach ($tweets as $tweet_key => $tweet): ?>
      <li>
        <blockquote>
        <?php print twitter_pull_add_links($tweet->text); ?>
          <cite><span class="tweet-author"><?php print l($tweet->username, 'http://twitter.com/' . $tweet->username); ?></span></cite>
        </blockquote>
      </li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
