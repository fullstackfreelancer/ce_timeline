# Changelog
All notable changes to this project will be documented in this file.

## [5.0.0] - 2025-05-07
### Added
- Optimized CSS to make lists look better
- Sets for TYPO3 v13 integrated
- TCA optimization / updates

## [4.0.2] - 2023-11-14
### Added
- Changed composer vendor name from "simonkoehler" to "fullstackfreelancer"

## [4.0.1] - 2023-11-14
### Added
- Header field of timeline records is not mandatory anymore
- Various compatibility updates PHP and config files

## [4.0.0] - 2023-11-14
### Added
- Compatibility with TYPO3 12.4.7
- Various compatibility updates PHP and config files

## [3.3.3] - 2022-04-23
### Added
- Compatibility with TYPO3 11.5.8 tested
- Minor CSS fixes
- Some Backend labels renamed

## [3.3.2] - 2021-08-24
### Added
- Compatibility with TYPO3 11.3.3 tested

## [3.3.1] - 2021-02-24

### Fixed
- Remove Class Tca.php and change TCA label output back to "normal" to prevent Ajax errors in the backend when creating timeline inline records

### Added
- CSS Style for "img-fluid" added, in case you don't use Bootstrap

## [3.3.0] - 2021-02-24

### Added
- Compatibility with TYPO3 11.1 tested

## [3.2.1] - 2021-02-21

### Added
- New constant "ce_timeline.layout.templateName" available. You don't need to change this. But you can choose now if the extension renders the "Default" Layout of fluid_styled_content, or the built-in layout "Timeline" wich is the current one you are probably using. If you use the "bootstrap_package" for TYPO3, I recommend to switch to "DEFAULT" (in the constant editor), in order to have all the background styles and layout classes available.
- Added "Access" tab to timeline entries, so that you can define starting time and ending time to your entries
- Several code cleanups
- Created CHANGELOG file and let's go on from here!

## [3.0.0] - 2020-08-19

### Added
- New entry type "Text with Images"
- New entry type "HTML-Code"
- Lightbox (doesn't need jQuery!)

Note: Requires database updates and all caches cleared!

## [2.0.3] - 2020-06-09
- First release
