# Timeline Content Element for TYPO3 (ce_timeline)

This extension provides a new content element of type "Timeline" (ce_timeline) that contains inline records of different timeline entries. Please note that this is not a plugin and there are no records visible in any list view by default. Feel free to use the code or the extension to use it as a basis for your own stuff.

## Installation

Install the extension by downloading it in the extension manager or on https://extensions.typo3.org/extension/ce_timeline/.

## Basic configuration

You don't need to configure much to get this extension running.

- add the static TypoScript (Timeline - Content Element) to your template record
- choose a static TypoScript (e.g. Timeline Styles - Default) to make the timeline look nice
- add a content element of type "Timeline" and add some entries
- have fun!

## Changing the template files

Since this is NOT a plugin, but a regular content element, you need to change the following paths, in order to overwrite the HTML/Fluid template paths with your own paths:

```typoscript
lib.contentElement{
    templateRootPaths{
        1277 = EXT:ce_timeline/Resources/Private/Templates/
    }
    partialRootPaths{
        1277 = EXT:ce_timeline/Resources/Private/Partials/
    }
}
```
