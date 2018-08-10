---
title: Fixing Keycap Digit emojis in Twitter for Android
date: 12:19 17-07-2018
headline: When the solution for backwards compatibility breaks current compatibility
taxonomy:
    category: blog
    tag: [android, twitter, emoji, troubleshooting, fix, development, digits, keycap, numpad]
---
![Full Keycap Digit emoji support](keycapdigits_comparison.en.jpg)

If you've followed a sports commenter during a sports tournament by using the Twitter For Android app (in my case, following football/soccer with [MisterChiping](https://twitter.com/MisterChiping)), you probably have found a couple of times that tweets don't display correctly when they're using the [keycap digit emojis](https://emojipedia.org/search/?q=keycap) instead of old-school digit characters. Using emoji digits is a good community management practice, the colored numbers stand out and make the tweet more visible. The only issue that arises is that the emojis representing characters 3 to 9 are not compatible with the stable release of the Twitter for Android App (tested as of July 2018).

<figure class="image-caption"><img alt="Difference in display of keycap digit emojis between iPhone and Android" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/DifferenceIPhoneAndroidTwitterKeyCapEmojisError1.jpg"><figcaption class="">On iPhone (left), all of the keycap digits are displayed, while there are issues with emojis 3-9 on Android (right)</figcaption></figure>

All the keycap digits are displayed without problems in the latest Twitter app for iOS, from where the account owner (Alexis) tweets.

<figure class="image-caption"><img alt="Tweet sent from Twitter for iPhone" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/TwitterForiPhone.jpg"><figcaption class="">The source read by TweetDeck confirms tweet was sent from iPhone</figcaption></figure>

While some followers were aware of the issue since the tweet's importance lies in the presented outstanding numbers from the competition, the message is lost, and some people might consider it Alexis made the error.

<figure class="image-caption"><img alt="Readers complain about using the keycap digit emojis that don't work on their platform" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/ComplaintFromAndroidUsers.jpg"><figcaption class="">A reader leaves a response complaining after the original tweet isn't displayed correctly</figcaption></figure>

I found out that I was facing the issue as well, so I decided to troubleshoot and find a workaround for this issue. I wasn't aware at the time what to call the digit symbols, so I decided to view the tweet from my desktop to be able to use the browser functionality Inspect Mode. To reproduce my procedure right-click while having the cursor over a digit emoji and click on the drop-down item 'Inspect Element'. This action opened the code for the image, and two properties that gave me an idea of what to search for:

`aria-label="Emoji: Keycap digit three"`

`title="Keycap digit three"`

Afterwards I needed to know what the support for that was on my Android version. I looked for `Android 7.0 Keycap Digit Three`, and on an Emojipedia result it appeared that Android had full support for the Keycap digit emojis, but these emojis presented should be yellow from as far back as [5.0 Marshmallow](https://emojipedia.org/google/android-5.0/) up to [7.0 Nougat](https://emojipedia.org/google/android-7.0/) (my device's version). Light blue emojis were shown, so the app wasn't using the native library.

Next step was figuring what emoji library does the Twitter app uses. By searching, I find a news site that reported that Twitter had decided on May 2018 to [switch to custom emoji library Twemoji on their Android app](https://blog.emojipedia.org/twitter-switches-to-twemoji-on-android/), in an attempt to bring parity of emoji capabilities to Android users. Support for Twemoji on Android goes back to v4.4 Kit Kat. Since the issue happened to me on Android 7.0, I could now disable Twemoji in an attempt to resolve this issue, since the keycap digit emojis were natively supported.

The steps to switch back to the native emoji library on the app are the following:

1. Open the sidebar by clicking on your account picture and go to the **"Settings and privacy"** option.
    <figure class="image-caption"><img alt="Sidebar menu of the Twitter app shows the settings and privacy option" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/settings_and_privacy.en.jpg"><figcaption class="">Step 1: Open the side menu by clicking your picture and click on 'Settings and privacy'</figcaption></figure>
2. Click on **"Display and sound"**
    <figure class="image-caption"><img alt="Menu item showing display and sound" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/display_and_sound.en.jpg"><figcaption class="">Step 2: Select the 'Display and Sound' option</figcaption></figure>
3. Deselect the option titled **"Emoji"**
    <figure class="image-caption"><img alt="Remove the selection on Emoji" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/emoji_deselected.en.jpg"><figcaption class="">Step 3: Find the option called 'Emoji' and tap to uncheck</figcaption></figure>
4. Click on **Restart Twitter** on the window to shut down the app and then click on the app from your launcher to open it back.
    <figure class="image-caption"><img alt="Click on Restart Twitter and reopen the app" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/restart_twitter_message.en.jpg"><figcaption class="">Step 4: Click on the button 'Restart Twitter' to close the app and reopen it afterwards.</figcaption></figure>

After making it to the last point, you should be able to see the keycap emojis in tweets in the Android app. You can open [this tweet in your app for testing purposes](https://twitter.com/DrConopoima/status/1019955037399932928). The actual appearance of the emojis may depend on your device's Android version and manufacturer (some manufacturers implement their native emojis).

<figure class="image-caption"><img alt="Full Keycap Digit emoji support" class="caption" src="/user/pages/01.blog/troubleshooting-tweemoji-keypad-digits/keycapdigits_comparison.en.jpg"><figcaption class="">Showing how all of the keycap digit emojis are showing correctly after disabling Twemoji</figcaption></figure>

If you are using Android 4.4 Kit Kat the keycap digit emojis may not be natively supported, unless your phone's manufacturer implemented them, in which case Twemoji's partial support would be better than nothing. It is also possible that some devices with newer Android versions from some manufacturers don't support all emojis natively either. Please give me your feedback if this worked for you at my Twitter [@DrConopoima](https://twitter.com/drconopoima).
