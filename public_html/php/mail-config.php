<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

// your Google reCAPTCHA keys here
$siteKey = '6Ld4iW4UAAAAAOyHR4HQGYpO9NqpsUQXiNJ1XXN9';
$secret = '6Ld4iW4UAAAAAPnbrH3lR2mDasr7lh064kcPBaTD';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["ryolambert@gmail.com" => "Ryo Lambert"];