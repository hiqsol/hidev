hiqdev/hidev
------------

## [0.5.0] - 2016-08-01

- Changed bumping with use of `chkipper`
- Fixed package title
- Added including of `.hidev/config-local.yml`
- Fixed functional tester

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin`
- Changed: greatly improved functional tests
- Fixed minor issues
- Added sudo modifier
- Added `@root` instead of `@prjdir`
- Added `hidev help`
- Added copying in `FileController`
- Changed `require:` option to `plugins:`
- Added `CommandController`
- Added `dump/internals` action
- Changed to use `hiqdev/composer-extension-plugin` instead of PluginManager
- Added `github/create` and `github/exists` actions
- Changed back to yii2 <- minii, used `asset-packagist.hiqdev.com` repository
- Added loading of project's own bootstrap and config
- Added better defaults when package name is domain
- Changed github `name` -> `full_name` to correspond github api
- Fixed scrutinizer issues
- Added smart vendor require in `hidev/init`
- Fixed `bump` and `bump/release`
- Added easy creation of templated dirs and files with `DirectoryController`
- Fixed `JsonHandler` to parse empty JSON to empty array (died before)

## [0.3.9] - 2016-01-26

- Fixed to work for projects without package manager
- Fixed GitHub token passing to curl

## [0.3.8] - 2016-01-26

- Added `bump/release` and `github/release` actions to automate release
- Fixed minor issues

## [0.3.7] - 2016-01-19

- Added getting default package start year with git log
- Added CollectionController
- Fixed: improved travis `before_install` section

## [0.3.6] - 2016-01-17

- Added `version` goal and OwnVersionController for better version management

## [0.3.5] - 2016-01-16

- Fixed minor and tested version bump

## [0.3.4] - 2016-01-16

- Fixed `bump/commit` to default to current version
- Fixed hidev own version showing

## [0.3.3] - 2016-01-16

- Added proper version bumping with `version/bump` and `bump`
- Added version output with `hidev --version` or `hidev version`

## [0.3.2] - 2016-01-16

- Added sorting inside `.gitignore` sections
- Fixed PHAR building

## [0.3.1] - 2016-01-15

- Added `bump/commit` action

## [0.3.0] - 2016-01-15

- Added history cleaning from 'Under development' section if it is empty
- Added `bump` goal for version bumping
- Fixed tests
- Added installing and vcsignoring PHAR for required binaries
- Changed: renamed hidev-travis-ci -> hidev-travis
- Changed: redone goals -> controllers
- Added `dump` goal
- Changed: redone with `composer-extension-plugin` instead of PluginManager
- Fixed to use latest Symfony YAML 3.0 <- 2.7
- Fixed minor issues
- Added `github/clone` action, NOT finished

## [0.2.0] - 2015-12-23

- Added runRequest and runRequests at DefaultGoal
- Fixed Travis build
- Added `update` goal
- Changed finding goal class
- Fixed InstallGoal::detectBin
- Changed: moved README goal to `hidev-readme` plugin
- Fixed PHP7 warnings
- Added phar compatibility
- Fixed minii requirements
- Added `GitHubGoal`

## [0.1.7] - 2015-12-04

- CHANGED: redone to `minii` and BROKEN build temporary
- Fixed badges generation
- Fixed vcsignoring implementation
- Added exit code propagation and running commands facilities
- Changed: license generation moved to `hidev-license` plugin
- Added `XmlHandler`
- Added PHPUnit integration with `hidev-phpunit` plugin
- Added Travis CI integration with `hidev-travis-ci` plugin
- Added more options to init goal
- Fixed and improved tests and minor issues

## [0.1.6] - 2015-11-09

- Fixed composer.json generation: follow schema, only name, role, email and homepage for authors

## [0.1.5] - 2015-11-09

- Added support for VCS ignoring list configuring in plugins

## [0.1.4] - 2015-11-09

- Fixed php short tags

## [0.1.3] - 2015-11-06

- Fixed 'hidev update' to do default procedure after updating
- Changed README generation: added package headline

## [0.1.2] - 2015-10-26

- Added basic Usage readme section
- Added control of readme sections to be rendered
- Added 'update' goal to update hidev internals

## [0.1.1] - 2015-10-25

- Added better badges configuring and rendering
- Fixed package title to: HiDev - integrated development
- Fixed getRepositoryUrl

## [0.1.0] - 2015-10-15

- Added improved README generation with render functions and section templates
- Changed License section in README
- Changed default config generated with 'hidev init': added authors and more options
- Added tests for README goal
- Added tests for 'hidev init'
- Fixed exception catching for proper showing user errors

## [0.0.10] - 2015-09-09

- Fixed init: made even smaller basic config
- Fixed getting/setting namespace

## [0.0.9] - 2015-09-08

- Added VersionEye badge generation
- Added showing user errors (instead of exception stack trace)
- Added init command: hidev init vendor/package
- Removed 'runtime' gitignoring by default

## [0.0.8] - 2015-08-17

- Added better README generation with badges and additional sections
- Added runAction/s
- Changed determining done
- Fixed minor bugs
- Changed .gitignore generation, now built from hashmap with comments
- Changed config: redone parent with plugins
- Changed source dir: moved to src
- Added initial Getting started doc
- Changed change log to follow keepachangelog.com recomendations
- Changed roadmap
- Added tests
- Added generate goal: generate file by template and params
- Added codeception plugin
- Changed config loading
- Changed: redone goals like controllers

## [0.0.7] - 2015-06-19

- Changed composer.json: dont add empty require
- Fixed code styling with php-cs-fixer
- Added php-cs-fixer plugin
- Added plugin archtecture
- Fixed portability

## [0.0.6] - 2015-06-06

- Changed: GREAT RENAMING OF CLASSES
- Added cool CHANGELOG.md generation
- Added gen action to generate files by templates
- Added "No licence" default license

## [0.0.5] - 2015-06-01

- Changed decreased default verbosity

## [0.0.4] - 2015-06-01

- Added twig templates

## [0.0.3] - 2015-06-01

- Added YAML config
- Added ROADMAP.md

## [0.0.2] - 2015-05-30

- Added parent config
- Added use of Robo (started robo integration)
- Changed namespace to 'hidev'
- Fixed different minor thing

## [0.0.1] - 2015-05-12

- Added basics
- Added colorized console output
- Added README.md generation
- Added CHANGELOG.md generation
- Added composer.json generation
- Added simple .gitignore generation
- Added LICENSE generation

## [Development started] - 2015-04-28
