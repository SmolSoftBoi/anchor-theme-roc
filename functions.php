<?php

/**
 * Has profile picture.
 *
 * @return bool True if profile picture.
 */
function has_profile_picture()
{
    return (site_meta('profile_picture', null) !== null);
}

function profile_picture_url()
{
    switch (site_meta('profile_picture')) {
        case 'instagram':
            return 'https://avatars.io/instagram/' . instagram_account();
        case 'twitter':
            return 'https://avatars.io/twitter/' . twitter_account();
        default:
            return site_meta('profile_picture');
    }
}

/**
 * Has Twitter.
 *
 * @return bool True if Twitter.
 */
function has_twitter()
{
    return (twitter_account() !== null);
}

/**
 * Twitter account.
 *
 * @return string Twitter account.
 */
function twitter_account()
{
    return site_meta('twitter', null);
}

/**
 * Twitter URL.
 *
 * @return string Twitter URL.
 */
function twitter_url()
{
    return 'https://twitter.com/' . twitter_account();
}

/**
 * Has Instagram.
 *
 * @return bool True if Instagram.
 */
function has_instagram()
{
    return (instagram_account() !== null);
}

/**
 * Instagram account.
 *
 * @return string Instagram account.
 */
function instagram_account()
{
    return site_meta('instagram', null);
}

/**
 * Instagram URL.
 *
 * @return string Instagram URL.
 */
function instagram_url()
{
    return 'https://instagram.com/' . instagram_account();
}