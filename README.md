# ![](https://github.com/koehlersimon/ce_timeline/blob/master/ext_icon.png?raw=true) ce_timeline - TYPO3 Extension

This extension provides a new content element of type "Timeline" (ce_timeline) that contains inline records of different timeline entries. Please note that this is not a plugin and there are no records visible in any list view by default. Feel free to use the code or the extension as a basis for your own stuff.

<table border="0">
    <tr>
        <th>Latest version</th>
        <td>4.0.2</td>
    </tr>
    <tr>
        <th>Status</th>
        <td><strong>stable</strong></td>
    </tr>
    <tr>
        <th>TYPO3 version</th>
        <td>11.8 - 12.4.7</td>
    </tr>
    <tr>
        <th>TER</th>
        <td><a href="https://extensions.typo3.org/extension/ce_timeline/">Download</a></td>
    </tr>
</table>

<hr>

## Features

- User friendly and easy to handle
- Includes predefined light, dark and pink stylesheets
- 100% responsive
- 4 different entry types (time, text, text & image, html)
- Entries can be ordered manually
- Optional header and text (rte) above each timeline
- Does not require any JavaScript <sup>*</sup>
- Does not require any other Extension
- Translated in English, German and Spanish
- Works seamlessly with bootstrap_package and other extensions
- SASS files included (see: /Resources/Private/Scss/)

<sup>*</sup> (the lightbox feature comes with its own, independent JavaScript!)

## Online DEMO and Screenshots
https://simonkoehler.com/typo3-extensions/timeline-content-element

## Upgrade from version 3.xx to version 4.0.0
Just install and overwrite the extension. If you get an error in the frontend or backend, make sure your caches have been cleared.

## Installation
Install the extension by downloading it in the extension manager or on https://extensions.typo3.org/extension/ce_timeline/.

## Basic configuration
You don't need to configure much to get this extension running.

- add the static TypoScript (Timeline - Content Element) to your template record
- add the static Page Configuration (Timeline Content Element) to your root page if you want a "New Content Element Wizard"
- choose a static TypoScript (e.g. Timeline Styles - Default) to make the timeline look nice
- add a content element of type "Timeline" and add some entries
- To use the lightbox-feature, you need to include the static TypoScript in your template record
- have fun!

## Need custom CSS Styling or even SASS?

No problem! Just do NOT include the Static TypoScript as mentioned above and the extension will render just plain HTML. If you want to use the styles that come with the extension, feel free to use the SASS file in "Resources/Private/Scss" and change them to your needs.

## Changing the template files

Since this is NOT a plugin but a regular content element, you need to change the following paths in order to overwrite the HTML/Fluid template paths with your own paths:

### Page Setup

```
lib.contentElement{
    templateRootPaths{
        1277 = EXT:ce_timeline/Resources/Private/Templates/
    }
    partialRootPaths{
        1277 = EXT:ce_timeline/Resources/Private/Partials/
    }
}
```

### Template files

Files you need to copy in order to overwrite them:

Main Template file:
https://github.com/koehlersimon/ce_timeline/blob/master/Resources/Private/Templates/Timeline.html

Partials:
https://github.com/koehlersimon/ce_timeline/tree/master/Resources/Private/Partials

## Support & Service

If you have any problems with the extension, please let me know! Don't hesitate to send a message: https://simonkoehler.com/contact

## Help me to keep this Extension up-to-date!

Many times if there is a special request, I just do it for free. I believe in the power of open source and free software. I also believe in you and your projects. If you like my work and you want to ensure further development, please don't hesitate to make a donation here: https://paypal.me/fullstackfreelancer
