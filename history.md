hiqdev/hidev
------------

## [0.5.0] - 2016-08-01

- Changed bumping with use of `chkipper`
    - [347befd] 2016-08-01 removed old bumping [sol@hiqdev.com]
    - [368e810] 2016-08-01 removing old bumping [sol@hiqdev.com]
    - [1b4772e] 2016-08-01 redone VersionController [sol@hiqdev.com]
    - [671d39e] 2016-08-01 switching to `chkipper` [sol@hiqdev.com]
    - [ee2d1b9] 2016-08-01 improved `github/release` action [sol@hiqdev.com]
    - [cb5f93c] 2016-08-01 enabled `alias` goals [sol@hiqdev.com]
    - [883d418] 2016-08-01 added `git/release` action [sol@hiqdev.com]
    - [a9ea1aa] 2016-07-29 changed package title again [sol@hiqdev.com]
    - [87ec52f] 2016-07-29 added FileHelper [sol@hiqdev.com]
    - [696eea4] 2016-07-09 csfixed [sol@hiqdev.com]
    - [639c664] 2016-07-09 testing chkipper [sol@hiqdev.com]
    - [45d1b47] 2016-06-21 added history, started switching to chkipper [sol@hiqdev.com]
    - [133dd20] 2016-06-12 csfixed [sol@hiqdev.com]
    - [9e41dae] 2016-06-12 fixed generating vendor plugin name [sol@hiqdev.com]
    - [d41e819] 2016-06-12 allowed to fail 5.5 at travis [sol@hiqdev.com]
- Fixed package title
    - [4292b81] 2016-07-21 changed package title [sol@hiqdev.com]
    - [fbb973d] 2016-06-21 improved package title [sol@hiqdev.com]
- Added including of `.hidev/config-local.yml`
    - [a8e0a44] 2016-05-25 added including of `.hidev/config-local.yml` [sol@hiqdev.com]
- Fixed functional tester
    - [32cfbc0] 2016-05-24 removed trim from Tester::writeFile [sol@hiqdev.com]
    - [a5a7080] 2016-05-21 added loading aliases in functional Tester [sol@hiqdev.com]

## [0.4.0] - 2016-05-21

- Changed: redone to `composer-config-plugin`
    - [2972338] 2016-05-21 redone to composer-config-plugin [sol@hiqdev.com]
    - [6fd2f95] 2016-05-20 rearranged initial configuration [sol@hiqdev.com]
    - [e0d5355] 2016-05-20 added `config/defines.php` [sol@hiqdev.com]
    - [2d54bb5] 2016-05-20 removed fcgi patching from bin/hidev [sol@hiqdev.com]
    - [61d7d4d] 2016-05-11 fixed `Application::setExtraConfig` added merging of params [sol@hiqdev.com]
    - [5a3d030] 2016-05-11 rearranged config files [sol@hiqdev.com]
- Changed: greatly improved functional tests
    - [71c5e53] 2016-05-16 csfixed [sol@hiqdev.com]
    - [7e12fc1] 2016-05-16 GREATLY improved functional tests to run internally instead of exec [sol@hiqdev.com]
    - [b4b8e10] 2016-05-16 redone `Yii::$app` to `$this->module` [sol@hiqdev.com]
    - [24dff74] 2016-05-16 + `aliases` option [sol@hiqdev.com]
    - [ff80ee0] 2016-05-16 changed setExtraConfig to force setting config component [sol@hiqdev.com]
    - [1e626df] 2016-05-16 fixed notices [sol@hiqdev.com]
    - [2f2770b] 2016-05-16 + spam level [sol@hiqdev.com]
    - [ab3d1ec] 2016-05-16 fixed notice [sol@hiqdev.com]
    - [32412ca] 2016-05-15 improved writeFile at functional Tester [sol@hiqdev.com]
    - [7c5fbbb] 2016-05-15 + package `years` parameter [sol@hiqdev.com]
    - [8eb455e] 2016-05-13 greatly improved functional tests: + assertFiles [sol@hiqdev.com]
    - [66b43c5] 2016-05-06 fixed @hidev at `src/_bootstrap.php` [sol@hiqdev.com]
    - [a4bef9c] 2016-05-06 improved functional Tester: + config [) (sol@hiqdev.com]
    - [d490419] 2016-05-06 disabled layout for controllers [sol@hiqdev.com]
    - [f961e79] 2016-05-06 + `hidev\tests` namespace [sol@hiqdev.com]
- Fixed minor issues
    - [ea170e3] 2016-05-15 added phpdocs [sol@hiqdev.com]
    - [639f133] 2016-05-13 fixed dependencies constraints [sol@hiqdev.com]
    - [5c02142] 2016-05-12 added more checks to setExtraConfig [sol@hiqdev.com]
    - [c235413] 2016-05-12 improved AbstractController::perform [) (sol@hiqdev.com]
    - [d99b3eb] 2016-05-12 fixed stupid bug with trimming [sol@hiqdev.com]
    - [4aa3cc4] 2016-05-12 + `StartController::buildRootPath` [sol@hiqdev.com]
    - [9db4c09] 2016-05-11 questionable second time main config set [sol@hiqdev.com]
    - [b1bf360] 2016-05-11 disabled brief error output [sol@hiqdev.com]
    - [16e130b] 2016-05-11 used modifiers in `Binary::prepareCommand` [sol@hiqdev.com]
    - [7104741] 2016-05-11 + plain file handler [sol@hiqdev.com]
    - [2efa1a1] 2016-05-11 added modifiers: interface, singleton and sudo [sol@hiqdev.com]
    - [40bc31c] 2016-05-10 improved CommandController: + multiline commands [sol@hiqdev.com]
    - [05cfb26] 2016-05-07 added force option to includeConfig [) (sol@hiqdev.com]
- Added sudo modifier
    - [4807e1c] 2016-05-11 csfixed [sol@hiqdev.com]
    - [d4a481f] 2016-05-11 used modifiers in `Binary::prepareCommand` [sol@hiqdev.com]
    - [5feebc7] 2016-05-11 added modifiers: interface, singleton and sudo [sol@hiqdev.com]
- Added `@root` instead of `@prjdir`
    - [2318a07] 2016-05-06 REDONE @prjdir to @root [sol@hiqdev.com]
    - [d10132e] 2016-04-13 fixed cding to prjdir [sol@hiqdev.com]
    - [2b8592a] 2016-03-16 + `StartController::addAliases` to add @prjdir and current package namespace [sol@hiqdev.com]
    - [8c5ef59] 2016-02-23 + `StartController::$prjdir` variable containing absolute path to the project root directory [sol@hiqdev.com]
    - [34300e8] 2016-02-16 fixed getting default `src` [sol@hiqdev.com]
- Added `hidev help`
    - [aff402f] 2016-05-01 removed junk - enabled `hidev help` [sol@hiqdev.com]
- Added copying in `FileController`
    - [7d90a5e] 2016-04-30 added copying with `CopyHandler` [sol@hiqdev.com]
- Changed `require:` option to `plugins:`
    - [37c8406] 2016-04-27 fixed composer install [sol@hiqdev.com]
    - [fb36fc9] 2016-04-27 renamed `require:` to `plugins:` [sol@hiqdev.com]
    - [17bfe3f] 2016-04-27 changed StartController to do composer install if has plugins in composer [sol@hiqdev.com]
- Added `CommandController`
    - [210ff02] 2016-04-25 phpcsfixed [sol@hiqdev.com]
    - [9a246f3] 2016-04-25 + recursive behavior at DirectoryController [sol@hiqdev.com]
    - [d905e0f] 2016-04-25 fixed chown and chgrp at File [sol@hiqdev.com]
    - [6243660] 2016-04-25 + command controller [sol@hiqdev.com]
    - [2d359c1] 2016-04-25 fixed runtime path to be next to vendor [sol@hiqdev.com]
    - [951f0fa] 2016-04-25 + empty view [sol@hiqdev.com]
    - [e0cd62b] 2016-04-18 fixed loading extra vendor config [sol@hiqdev.com]
    - [1ab4f8e] 2016-04-14 fixed bootstrapping: + set alias for hidev [sol@hiqdev.com]
- Added `dump/internals` action
    - [596dc67] 2016-04-13 + `dump/internals` [sol@hiqdev.com]
- Changed to use `hiqdev/composer-extension-plugin` instead of PluginManager
    - [ccead93] 2016-04-13 - forced require hiqdev/composer-extension-plugin at `composer.json` and `.hidev/composer.json` [sol@hiqdev.com]
    - [26e6f42] 2016-04-13 redone to `hidev-config` <- `extension-config` [sol@hiqdev.com]
    - [6563e6d] 2016-04-13 fixed readExtraVendor for new hiqdev/composer-extension-plugin [sol@hiqdev.com]
    - [671164a] 2016-04-13 forced to use `dev-master` version of `hiqdev/composer-extension-plugin` [sol@hiqdev.com]
    - [ede5419] 2016-03-31 improved ROADMAP [sol@hiqdev.com]
    - [6514c7d] 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` [sol@hiqdev.com]
    - [9259403] 2016-03-30 changed `hiqdev/extensions-config.php` <- `yiisoft/yii2-extraconfig.php` [sol@hiqdev.com]
    - [9aafba9] 2016-03-10 + yii2-extraconfig [sol@hiqdev.com]
- Added `github/create` and `github/exists` actions
    - [c186f54] 2016-04-09 improved `github/create` to show instructions [sol@hiqdev.com]
    - [c4a1380] 2016-02-28 + github exists action [sol@hiqdev.com]
    - [0d87f6f] 2016-02-23 + `github/create` with proper name and description [sol@hiqdev.com]
    - [2fbeaa4] 2016-02-23 fixed GitController to git history only if git repository actually exists [sol@hiqdev.com]
- Changed back to yii2 <- minii, used `asset-packagist.hiqdev.com` repository
    - [a894630] 2016-04-09 fixed cs [sol@hiqdev.com]
    - [21166ab] 2016-04-08 removed RoboFile [sol@hiqdev.com]
    - [e8776fd] 2016-04-08 fixed scrutinizer issues [sol@hiqdev.com]
    - [24d81b7] 2016-04-07 fixed scrutinizer issues [sol@hiqdev.com]
    - [a72c3cb] 2016-04-04 fixed travis build [sol@hiqdev.com]
    - [9b4e898] 2016-04-04 debugging travis build [sol@hiqdev.com]
    - [af84f05] 2016-04-04 switched to https asset-packagist.hiqdev.com [sol@hiqdev.com]
    - [f588f49] 2016-04-04 used asset-packagist.hiqdev.com repository [sol@hiqdev.com]
    - [165bc08] 2016-04-03 fixed typos at `src/_bootstrap.php` [sol@hiqdev.com]
    - [5142b11] 2016-04-02 redone bootstrapping [sol@hiqdev.com]
    - [66a75bc] 2016-04-02 CHANGED back to yii2 <- minii [sol@hiqdev.com]
- Added loading of project's own bootstrap and config
    - [1257928] 2016-04-03 + `StartController::loadConfig` to load project's own config [sol@hiqdev.com]
    - [04baf42] 2016-04-02 cleaned up unused bootstraps at tests [sol@hiqdev.com]
    - [7c43216] 2016-04-02 + `StartController::addAutoloader` to load autoloader of the project [sol@hiqdev.com]
- Added better defaults when package name is domain
    - [c7f604b] 2016-04-01 fixed isDomain checking [sol@hiqdev.com]
    - [732eec5] 2016-04-01 + ideas to roadmap [sol@hiqdev.com]
    - [bb6db97] 2016-04-01 + better defaults: type=project and title=name when domain [sol@hiqdev.com]
- Changed github `name` -> `full_name` to correspond github api
    - [d905002] 2016-03-22 CHANGED github name -> `full_name` to correspond github api [sol@hiqdev.com]
- Fixed scrutinizer issues
    - [e8761fe] 2016-03-17 + allow use `symfony/yaml` 2.0 [sol@hiqdev.com]
    - [4956d3a] 2016-03-16 fixing scrutinizer issues [sol@hiqdev.com]
    - [c1a7eae] 2016-03-16 removed old History class [sol@hiqdev.com]
    - [41f76b5] 2016-03-16 removed commented out code [sol@hiqdev.com]
    - [fd5497c] 2016-03-16 fixing scrutinizer issues [sol@hiqdev.com]
- Added smart vendor require in `hidev/init`
    - [eecb999] 2016-03-16 + test for smart require in `hidev/init` [sol@hiqdev.com]
    - [bd9142a] 2016-03-16 phpcsfixed [sol@hiqdev.com]
    - [af54ce3] 2016-03-16 finished addding smart vendor require in `hidev/init` [sol@hiqdev.com]
    - [06571e9] 2016-03-16 renamed to passthru/execBinary [sol@hiqdev.com]
    - [c331ed4] 2016-03-16 + smart vendor require in `hidev/init` [sol@hiqdev.com]
    - [d0078b4] 2016-03-16 + static `GithubController::exists` [sol@hiqdev.com]
    - [41e8686] 2016-03-16 redone takeGoal/Config/Vendor/Vcs, exec, passthru to static [sol@hiqdev.com]
- Fixed `bump` and `bump/release`
    - [e309819] 2016-03-12 ask github token from user [sol@hiqdev.com]
    - [361821f] 2016-03-12 + `readline` and `readpassword` [sol@hiqdev.com]
    - [9039c2b] 2016-03-15 + `PackageController::getVersion` [sol@hiqdev.com]
    - [ef8670a] 2016-03-12 fixed showing error message when not composered [sol@hiqdev.com]
    - [0378e33] 2016-02-28 + binary exec to return exit code [sol@hiqdev.com]
    - [274d419] 2016-02-19 + added [not finished) waiting until push is actually finished (sol@hiqdev.com]
    - [b8c8f11] 2016-02-19 improved `version` file reading/writing [check for existing) (sol@hiqdev.com]
    - [001c935] 2016-03-10 phpcsfixed [sol@hiqdev.com]
- Added easy creation of templated dirs and files with `DirectoryController`
    - [7348679] 2016-02-27 improved Idea description [sol@hiqdev.com]
    - [48eeab0] 2016-02-27 removed dirs from config [sol@hiqdev.com]
    - [960b60c] 2016-02-23 enabled easy creation of templated files with DirectoryController [sol@hiqdev.com]
    - [1a8499d] 2016-02-23 + `FileController::$once` option to save file only once, no rewrite [sol@hiqdev.com]
    - [5d0a339] 2016-03-01 - `GenerateController::actionMkdir` because of DirectoryController [sol@hiqdev.com]
    - [35d4887] 2016-02-18 * `BaseHandler`: + create intermediate directories when necessary before writing file [sol@hiqdev.com]
    - [bdb7086] 2016-02-14 implicit non strict comparision in `in_array` [sol@hiqdev.com]
    - [73d19d3] 2016-02-14 + file info returning functions: getUid/Gid/Owner/Group/Permissions and used in chmod, chown, chgrp [sol@hiqdev.com]
    - [e513542] 2016-02-13 + DirectoryController with chmod, chown, chgrp [sol@hiqdev.com]
- Fixed `JsonHandler` to parse empty JSON to empty array (died before)
    - [a6f476e] 2016-02-23 + explicit TemplateController to config [sol@hiqdev.com]
    - [9c48c87] 2016-02-23 changed JsonHandler to parse empty JSON to empty array [sol@hiqdev.com]

## [0.3.9] - 2016-01-26

- Fixed to work for projects without package manager
    - [84af45b] 2016-02-09 fixed to work for projects without package manager [sol@hiqdev.com]
- Fixed GitHub token passing to curl
    - [675ff34] 2016-01-26 fixed passing github token to curl [sol@hiqdev.com]

## [0.3.8] - 2016-01-26

- Added `bump/release` and `github/release` actions to automate release
    - [d18dbf9] 2016-01-26 + `bump/release` and `github/release` actions to automate release [sol@hiqdev.com]
    - [9465389] 2016-01-26 + `git/push` action [sol@hiqdev.com]
    - [c94dfb3] 2016-01-26 + keeping releaseNotes in ChangelogHandler [sol@hiqdev.com]
- Fixed minor issues
    - [eb61867] 2016-01-26 added GithubController to config [sol@hiqdev.com]
    - [fe52e0b] 2016-01-20 slightly improved `version` file handling [sol@hiqdev.com]

## [0.3.7] - 2016-01-19

- Added getting default package start year with git log
    - [95c5736] 2016-01-19 simplified `tests/_bootstrap` [sol@hiqdev.com]
    - [7fd043d] 2016-01-19 fixed start year to 2015 everywhere [sol@hiqdev.com]
    - [66e1684] 2016-01-19 added getting package start year with git log [sol@hiqdev.com]
- Added CollectionController
    - [2c93cbc] 2016-01-18 + abstract CollectionController and used at src/controllers/FileController [sol@hiqdev.com]
    - [667564a] 2016-01-17 simplified: removed runAction [sol@hiqdev.com]
- Fixed: improved travis `before_install` section
    - [5e410f8] 2016-01-17 improved travis `before_install` section [sol@hiqdev.com]
    - [4ca3470] 2016-01-17 testing new travis plugin [sol@hiqdev.com]

## [0.3.6] - 2016-01-17

- Added `version` goal and OwnVersionController for better version management
    - [eb6e26a] 2016-01-17 skip changing version file after version bump commit [sol@hiqdev.com]
    - [7ac88a0] 2016-01-17 fixed `bump/commit` [sol@hiqdev.com]
    - [da01f6f] 2016-01-17 used error instead of warning to warn about Version already there [sol@hiqdev.com]
    - [53b78cc] 2016-01-17 allowed [with warning) repeated version bump (sol@hiqdev.com]
    - [129309c] 2016-01-17 improved version management with OwnVersionController [sol@hiqdev.com]
    - [3fdb006] 2016-01-17 temp quick fix [sol@hiqdev.com]

## [0.3.5] - 2016-01-16

- Fixed minor and tested version bump
    - [2739e53] 2016-01-16 minor fixes and testing version bump [sol@hiqdev.com]

## [0.3.4] - 2016-01-16

- Fixed `bump/commit` to default to current version
    - [f9f8ca1] 2016-01-16 improved `bump/commit` to default to current version [sol@hiqdev.com]
- Fixed hidev own version showing
    - [60fba25] 2016-01-16 fixed hidev own version showing [sol@hiqdev.com]
    - [5d775fa] 2016-01-16 fixed error showing when not a hidev project [sol@hiqdev.com]

## [0.3.3] - 2016-01-16

- Added proper version bumping with `version/bump` and `bump`
    - [9cc9413] 2016-01-16 + `version/bump` action [sol@hiqdev.com]
    - [5b5b7c7] 2016-01-16 + File::write [) (sol@hiqdev.com]
- Added version output with `hidev --version` or `hidev version`
    - [efc2436] 2016-01-16 + version output with `hidev --version` [sol@hiqdev.com]

## [0.3.2] - 2016-01-16

- Added sorting inside `.gitignore` sections
    - [797c0ed] 2016-01-16 sorted gitignore rendering [sol@hiqdev.com]
- Fixed PHAR building
    - [38e6772] 2016-01-16 fixed PHAR building [sol@hiqdev.com]

## [0.3.1] - 2016-01-15

- Added `bump/commit` action
    - [dab1d8d] 2016-01-15 + bump/commit [sol@hiqdev.com]

## [0.3.0] - 2016-01-15

- Added history cleaning from 'Under development' section if it is empty
    - [88efe3f] 2016-01-15 crutched cleaning up history [sol@hiqdev.com]
    - [fe14804] 2016-01-15 + CommitsHandler::cleanupHistory to delete 'Under development' section if it is empty [sol@hiqdev.com]
- Added `bump` goal for version bumping
    - [39ddbc3] 2016-01-15 fixed typo [sol@hiqdev.com]
    - [5c90250] 2016-01-15 testing version bump [sol@hiqdev.com]
    - [1a4bfac] 2016-01-15 + `bump` goal for version bumping [sol@hiqdev.com]
- Fixed tests
    - [44cdcf4] 2016-01-15 fixed tests [sol@hiqdev.com]
    - [97da7e1] 2016-01-14 fixed main config vendorPath [sol@hiqdev.com]
    - [4b5deff] 2016-01-14 fixed travis `before_install` [sol@hiqdev.com]
    - [3a0dc90] 2016-01-14 fixing tests [sol@hiqdev.com]
    - [9c2fd91] 2016-01-14 improved calling composer in UpdateGoal [sol@hiqdev.com]
- Added installing and vcsignoring PHAR for required binaries
    - [bb4d228] 2016-01-15 + gitignore runtime dir [sol@hiqdev.com]
    - [521d2d5] 2016-01-15 + sorting phar gitignores list [sol@hiqdev.com]
    - [1a02e54] 2016-01-15 + binary exec [$args) (sol@hiqdev.com]
    - [8a53c89] 2016-01-14 added installing binaries [sol@hiqdev.com]
    - [ca62f72] 2016-01-14 added ignoring PHARs [sol@hiqdev.com]
    - [ba087e2] 2016-01-14 + ignore PHARs [sol@hiqdev.com]
- Changed: renamed hidev-travis-ci -> hidev-travis
    - [2a90b09] 2016-01-13 renamed hidev-travis <- hidev-travis-ci [sol@hiqdev.com]
- Changed: redone goals -> controllers
    - [a9c7153] 2016-01-15 simplified starting [sol@hiqdev.com]
    - [325446e] 2016-01-13 phpcsfixed [sol@hiqdev.com]
    - [b47ceba] 2016-01-13 phpcsfixed [sol@hiqdev.com]
    - [0003a33] 2016-01-13 + do `start` if unknown goal [sol@hiqdev.com]
    - [92b2482] 2016-01-13 returned back uniqueConfig before saving file [sol@hiqdev.com]
    - [22263b6] 2016-01-13 continue renaming get -> take [sol@hiqdev.com]
    - [e9b78a1] 2016-01-13 continue renaming get -> take [sol@hiqdev.com]
    - [74ba260] 2016-01-13 fixed typo [sol@hiqdev.com]
    - [a47060f] 2016-01-13 + AbstractController and getConfig/Goal/.. renamed to takeConfig/Goal to aviod being getters [sol@hiqdev.com]
    - [e5936b0] 2016-01-13 fixing changelog generation [sol@hiqdev.com]
    - [d2b94eb] 2016-01-13 fixed loading extra config [sol@hiqdev.com]
    - [83ed325] 2016-01-13 redone GitHub goal without collection [sol@hiqdev.com]
    - [9675fa6] 2016-01-13 redone GitHub goal without collection [sol@hiqdev.com]
    - [66e2166] 2016-01-12 still broken [sol@hiqdev.com]
    - [0ff3351] 2016-01-12 redoing goals to controllers BROKEN init & dump look working [sol@hiqdev.com]
    - [b4a6ad3] 2016-01-10 + static File::create to simplify creating object from path or config [sol@hiqdev.com]
    - [f68e1dc] 2016-01-09 * BaseHandler::write + return if file was changed or not [sol@hiqdev.com]
- Added `dump` goal
    - [8f5eda1] 2016-01-13 fixed dump controller [sol@hiqdev.com]
    - [da3731a] 2016-01-09 + DumpGoal [sol@hiqdev.com]
- Changed: redone with `composer-extension-plugin` instead of PluginManager
    - [ea6dd43] 2016-01-14 returned back composer-extension-plugin dependency [sol@hiqdev.com]
    - [404225c] 2016-01-14 removed composer-extension-plugin dependency, it is only needed at .hidev [sol@hiqdev.com]
    - [22637e9] 2016-01-07 redoing with composer-extension-plugin BROKEN [sol@hiqdev.com]
- Fixed to use latest Symfony YAML 3.0 <- 2.7
    - [d2de282] 2016-01-02 + scrutinizer config for code rating and duplication checks [sol@hiqdev.com]
    - [08f8789] 2016-01-02 used Symfony YAML 3.0 <- 2.7 [sol@hiqdev.com]
- Fixed minor issues
    - [571496d] 2015-12-26 fixed vcs/gitignore goals linking [sol@hiqdev.com]
- Added `github/clone` action, NOT finished
    - [164599f] 2015-12-26 fixed typo [sol@hiqdev.com]
    - [7fb6929] 2015-12-26 + github/clone action not finished [sol@hiqdev.com]

## [0.2.0] - 2015-12-23

- Added runRequest and runRequests at DefaultGoal
    - [b307d56] 2015-12-23 improved skipCommit to skip version bump [sol@hiqdev.com]
    - [cc841c3] 2015-12-23 + runRequest/s at DefaultGoal [sol@hiqdev.com]
- Fixed Travis build
    - [d9ad16c] 2015-12-23 + travis `after_script` [sol@hiqdev.com]
    - [5628857] 2015-12-23 - require fxp composer plugin from travis config [sol@hiqdev.com]
    - [36fd241] 2015-12-22 enabled code coverage in scrutinizer [sol@hiqdev.com]
    - [833e973] 2015-12-19 fixed travis: fxp plugin moved to `before_install` [sol@hiqdev.com]
    - [93f3510] 2015-12-15 fixed travis config: dont build 5.4 and dont allow failure 7 [sol@hiqdev.com]
    - [ce3ad2d] 2015-12-15 - hidev from install [sol@hiqdev.com]
- Added `update` goal
    - [24cb56b] 2015-12-23 + Update goal [sol@hiqdev.com]
- Changed finding goal class
    - [91903fe] 2015-12-22 CHANGED: simplified finding goal class [sol@hiqdev.com]
- Fixed InstallGoal::detectBin
    - [e7b3aa5] 2015-12-22 fixed InstallGoal::detectBin proper searching for binary [sol@hiqdev.com]
- Changed: moved README goal to `hidev-readme` plugin
    - [4692567] 2015-12-22 removed getConfigFile <- getConfiguration [sol@hiqdev.com]
    - [4593f67] 2015-12-22 trying new README [sol@hiqdev.com]
    - [56d9353] 2015-12-21 CHANGED: moved README goal to `hidev-readme` [sol@hiqdev.com]
    - [4d4cc92] 2015-12-12 improved readme badges templates [sol@hiqdev.com]
- Fixed PHP7 warnings
    - [4e0b313] 2015-12-14 fixed PHP7 warnings [sol@hiqdev.com]
    - [4996078] 2015-12-14 fixing PHP7 warnings [sol@hiqdev.com]
- Added phar compatibility
    - [5dee3f0] 2015-12-14 + RUNDIR detection for phar [sol@hiqdev.com]
    - [3183775] 2015-12-14 + box.json [sol@hiqdev.com]
- Fixed minii requirements
    - [2b908eb] 2015-12-12 fixed minii requirements to stable [sol@hiqdev.com]
- Added `GitHubGoal`
    - [59ea763] 2015-12-12 fixed github goal [sol@hiqdev.com]
    - [fdad63e] 2015-12-12 added GitHubGoal, it will NOT be separate [sol@hiqdev.com]

## [0.1.7] - 2015-12-04

- CHANGED: redone to `minii` and BROKEN build temporary
    - [de5d98f] 2015-12-02 fixed tests [sol@hiqdev.com]
    - [84f12c8] 2015-12-02 used prepareExtensions [sol@hiqdev.com]
    - [073dc7a] 2015-12-01 fixed ComposerJson::getFullName [sol@hiqdev.com]
    - [b33cf78] 2015-12-02 first working with minii [sol@hiqdev.com]
- Fixed badges generation
    - [ca66d21] 2015-12-03 fixed badges generation with Twig [sol@hiqdev.com]
    - [c8d02f2] 2015-11-24 removed junk template for gitignore [sol@hiqdev.com]
    - [1558eac] 2015-11-24 fixed check for VersionEye badge [sol@hiqdev.com]
- Fixed vcsignoring implementation
    - [62a6737] 2015-11-26 + test coverage reporting [sol@hiqdev.com]
    - [b1833cc] 2015-11-26 improved vcsignoring implementation [sol@hiqdev.com]
- Added exit code propagation and running commands facilities
    - [da94efe] 2015-11-24 + Application::runAction to not to corrupt exit status [sol@hiqdev.com]
    - [4d6ce1d] 2015-11-23 + exit code propagation and running commands facilities: `passthru` and `get/detectBin` [sol@hiqdev.com]
    - [1c40e5c] 2015-11-23 + functional test suite for phpunit [sol@hiqdev.com]
- Changed: license generation moved to `hidev-license` plugin
    - [3a19a38] 2015-11-22 license generation moved to `hidev-license` plugin [sol@hiqdev.com]
    - [daa3eb2] 2015-11-12 + proprietary license [sol@hiqdev.com]
- Added `XmlHandler`
    - [69fedec] 2015-11-23 added minimal example at File [sol@hiqdev.com]
    - [77dbdaa] 2015-11-21 + `XmlHandler` for xml files [sol@hiqdev.com]
- Added PHPUnit integration with `hidev-phpunit` plugin
    - [c7c632e] 2015-11-24 fixed functional tests to work without Codeception [sol@hiqdev.com]
    - [e3b0fc0] 2015-11-22 improved package description [sol@hiqdev.com]
    - [c668afe] 2015-11-21 + phpunt.xml.dist [sol@hiqdev.com]
- Added Travis CI integration with `hidev-travis-ci` plugin
    - [6bcf138] 2015-11-24 + Travis CI badge [sol@hiqdev.com]
    - [1f7fa85] 2015-11-21 fixed check for VersionEye badge [sol@hiqdev.com]
    - [9036920] 2015-11-21 improved checking hasRequire/Dev/Any [sol@hiqdev.com]
    - [9936b13] 2015-11-20 trying travis [sol@hiqdev.com]
    - [c79d8e5] 2015-11-20 php-cs-fixed [sol@hiqdev.com]
    - [5cedb80] 2015-11-20 fixed to `hiqdev\yii2\collection` namespace [sol@hiqdev.com]
    - [562e42a] 2015-11-20 still doing travis plugin [sol@hiqdev.com]
    - [7ea638c] 2015-11-19 fixing scrutinizer [sol@hiqdev.com]
    - [b0179d6] 2015-11-19 + travis allow failures for 7 and hhvm [sol@hiqdev.com]
    - [3a15706] 2015-11-19 + .scrutinizer.yml [sol@hiqdev.com]
    - [b11eae2] 2015-11-19 debugging travis [sol@hiqdev.com]
    - [b521bef] 2015-11-19 + exception when cant run goal [sol@hiqdev.com]
    - [8259bc7] 2015-11-19 trying travis [sol@hiqdev.com]
    - [76aae11] 2015-11-19 trying travis [sol@hiqdev.com]
    - [61bb4b4] 2015-11-19 + `ComposerJsonGoal::hasRequire/Dev/Any` [sol@hiqdev.com]
    - [b186d89] 2015-11-19 php-cs-fixed [sol@hiqdev.com]
    - [8de4839] 2015-11-19 changed hidev modules require to get dev versions [sol@hiqdev.com]
    - [e5f0713] 2015-11-19 + uniqueConfig to remove duplicates from arrays in configs [sol@hiqdev.com]
- Added more options to init goal
    - [7049343] 2015-11-18 + more options to init goal [sol@hiqdev.com]
- Fixed and improved tests and minor issues
    - [c114e03] 2015-11-18 fixed tests [sol@hiqdev.com]
    - [fda72aa] 2015-11-17 improved package description [sol@hiqdev.com]
    - [1541aa7] 2015-11-15 fixed PackageGoal::defaultNamespace to be more strict [sol@hiqdev.com]
    - [7794937] 2015-11-14 simplified package description processing [sol@hiqdev.com]
    - [be32612] 2015-11-12 simplified building LICENSE link [sol@hiqdev.com]
    - [65a9b07] 2015-11-12 improved package headline processing [sol@hiqdev.com]
    - [31d0ba6] 2015-11-12 improved generation of psr4 autoload config in composer.json [sol@hiqdev.com]

## [0.1.6] - 2015-11-09

- Fixed composer.json generation: follow schema, only name, role, email and homepage for authors
    - [85a0ff7] 2015-11-09 fixed composer.json generation: follow schema, only name, role, email and homepage for authors [sol@hiqdev.com]

## [0.1.5] - 2015-11-09

- Added support for VCS ignoring list configuring in plugins
    - [ce7ea96] 2015-11-09 enabled php-cs-fixer caching [sol@hiqdev.com]
    - [91a543c] 2015-11-09 added support for vcsignore list configuring in plugins [sol@hiqdev.com]

## [0.1.4] - 2015-11-09

- Fixed php short tags
    - [2bd5bc5] 2015-11-09 php-cs-fixed [sol@hiqdev.com]
    - [3439892] 2015-11-09 changed project title to: Task runner, code generator and build tool for easier continuos integration [sol@hiqdev.com]
    - [9d938de] 2015-11-06 + nick and github to authors section in composer.json [sol@hiqdev.com]

## [0.1.3] - 2015-11-06

- Fixed 'hidev update' to do default procedure after updating
    - [6323f7c] 2015-11-06 improved UpdateGoal to do default procedure after updating [sol@hiqdev.com]
- Changed README generation: added package headline
    - [c544564] 2015-11-06 Changed README generation: added package headline [sol@hiqdev.com]

## [0.1.2] - 2015-10-26

- Added basic Usage readme section
    - [a533502] 2015-10-26 + basic Usage readme section [sol@hiqdev.com]
- Added control of readme sections to be rendered
    - [cdf01e7] 2015-10-26 + control of readme sections to be rendered [sol@hiqdev.com]
- Added 'update' goal to update hidev internals
    - [68fb235] 2015-10-26 + update goal [sol@hiqdev.com]

## [0.1.1] - 2015-10-25

- Added better badges configuring and rendering
    - [cae13d3] 2015-10-25 + github.version badge [sol@hiqdev.com]
    - [c17149c] 2015-10-25 fixed badges rendering [sol@hiqdev.com]
    - [7841c69] 2015-10-24 + fixed badges configuring [sol@hiqdev.com]
- Fixed package title to: HiDev - integrated development
    - [7e900c3] 2015-10-24 changed package title to: HiDev - integrated development [sol@hiqdev.com]
- Fixed getRepositoryUrl
    - [888674e] 2015-10-24 fixed getRepositoryUrl [sol@hiqdev.com]

## [0.1.0] - 2015-10-15

- Added improved README generation with render functions and section templates
    - [25fa62d] 2015-10-15 improved README generation with render functions and section templates [sol@hiqdev.com]
- Changed License section in README
    - [0bb0366] 2015-10-05 fixed tests for new readme license section [sol@hiqdev.com]
    - [5bfde10] 2015-10-05 changed License section in README [sol@hiqdev.com]
- Changed default config generated with 'hidev init': added authors and more options
    - [cbe63ec] 2015-10-06 improved 'hidev init' + authors section [sol@hiqdev.com]
    - [cba9771] 2015-10-05 fixed configuration readme for new 'hidev init' [sol@hiqdev.com]
    - [adfd43e] 2015-10-05 fixed tests for new features [sol@hiqdev.com]
    - [f21e66d] 2015-10-05 improved 'hidev init': + year and description options [sol@hiqdev.com]
- Added tests for README goal
    - [10f28b4] 2015-10-05 php-cs-fixed [sol@hiqdev.com]
    - [a96c530] 2015-10-05 php-cs-fixed [sol@hiqdev.com]
    - [a0ee0df] 2015-10-05 + README minimal test [sol@hiqdev.com]
- Added tests for 'hidev init'
    - [397193c] 2015-10-05 improved defaults for label, title and init [sol@hiqdev.com]
    - [3a01b0b] 2015-10-05 fixed 'hidev init' to make type=project [sol@hiqdev.com]
    - [c798edc] 2015-10-04 + ReadmeGoalTest [sol@hiqdev.com]
    - [23d719a] 2015-10-03 + functional/Tester.php [sol@hiqdev.com]
    - [aa38c08] 2015-09-21 + codeception gitignoring [sol@hiqdev.com]
    - [f14cedb] 2015-09-21 added basic tests for hidev init [sol@hiqdev.com]
- Fixed exception catching for proper showing user errors
    - [0f4634f] 2015-09-20 fixed exception catching [sol@hiqdev.com]

## [0.0.10] - 2015-09-09

- Fixed init: made even smaller basic config
    - [ec5b407] 2015-09-09 fixed init: added conditional generation [sol@hiqdev.com]
- Fixed getting/setting namespace
    - [f95fe40] 2015-09-09 fixed getting/setting namespace [sol@hiqdev.com]

## [0.0.9] - 2015-09-08

- Added VersionEye badge generation
    - [64d022d] 2015-09-08 fixed versioneye badge: dont show when no dependencies [sol@hiqdev.com]
    - [829f22b] 2015-09-08 php-cs-fixed [sol@hiqdev.com]
    - [cfe368f] 2015-09-08 + VersionEye badge generation in ReadmeGoal [sol@hiqdev.com]
    - [687da1e] 2015-09-08 + VersionEye badge [sol@hiqdev.com]
    - [ee0043c] 2015-09-08 docs [sol@hiqdev.com]
    - [c96bec0] 2015-09-08 docs [sol@hiqdev.com]
    - [e573d4e] 2015-09-08 docs [sol@hiqdev.com]
- Added showing user errors (instead of exception stack trace)
    - [7001f7e] 2015-09-08 added showing user errors by catching exceptions caused by user mistakes [sol@hiqdev.com]
- Added init command: hidev init vendor/package
    - [e90976f] 2015-09-08 added init command [sol@hiqdev.com]
    - [de455b9] 2015-09-08 + DefaultGoal::options [) for allowing to set public members with --option=value (sol@hiqdev.com]
    - [f840ce3] 2015-09-08 + Helper::getPublicVars, titleize [sol@hiqdev.com]
- Removed 'runtime' gitignoring by default
    - [4aa140b] 2015-08-22 removed ignore runtime from VcsGoal [sol@hiqdev.com]

## [0.0.8] - 2015-08-17

- Added better README generation with badges and additional sections
    - [4918bc2] 2015-08-17 + url license at README License Section [sol@hiqdev.com]
    - [81dca07] 2015-08-17 + prefer source when getting .hidev deps [sol@hiqdev.com]
    - [3660961] 2015-08-17 + 'include' configuration option [sol@hiqdev.com]
    - [f34ccb8] 2015-08-17 + LicenceGoal::getUrl [) (sol@hiqdev.com]
    - [ed8d93f] 2015-08-17 + Helper::camel2id [sol@hiqdev.com]
    - [5798ab8] 2015-08-17 Update README.md [sol@hiqdev.com]
    - [144715e] 2015-08-17 + better README generation [sol@hiqdev.com]
    - [1e1ef93] 2015-08-17 + better README generation [sol@hiqdev.com]
- Added runAction/s
    - [e5c212f] 2015-07-28 + runAction/s with isDone check to run once [sol@hiqdev.com]
- Changed determining done
    - [f7dc1ee] 2015-07-19 * determining done: + is/markDone [sol@hiqdev.com]
- Fixed minor bugs
    - [bf13b89] 2015-08-17 + better description [sol@hiqdev.com]
    - [f4a8f5b] 2015-07-19 fixed setting deps at CommitsGoal [sol@hiqdev.com]
    - [675fa1b] 2015-07-19 simplified ChangelogHandler::parse/render [sol@hiqdev.com]
    - [8ea5658] 2015-07-19 - old junk debug from BaseHandler::parsePath [sol@hiqdev.com]
    - [46c110b] 2015-07-18 minor fixes [sol@hiqdev.com]
- Changed .gitignore generation, now built from hashmap with comments
    - [52733f9] 2015-07-12 improved .gitignore generation [sol@hiqdev.com]
    - [8600bf1] 2015-07-12 + .gitignore smart generation [sol@hiqdev.com]
- Changed config: redone parent with plugins
    - [c7fcc13] 2015-07-12 fixed require at .hidev/config [sol@hiqdev.com]
    - [9524e62] 2015-07-11 php-cs-fixed [sol@hiqdev.com]
    - [0c1619f] 2015-07-11 * .hidev/config require to hidev-config-php only [sol@hiqdev.com]
    - [00d2fdf] 2015-07-11 * initing: + create .hidev/vendor if not exists [sol@hiqdev.com]
    - [dd5132a] 2015-07-10 - run local hidev [sol@hiqdev.com]
    - [62c053e] 2015-07-10 commits moved back to .hidev/commits.md [sol@hiqdev.com]
    - [8899ef1] 2015-07-10 + Application::bootstrap [) to load .hidev/vendor (sol@hiqdev.com]
    - [613e134] 2015-07-10 redoing to .hidev/vendor [sol@hiqdev.com]
    - [af65f57] 2015-07-09 warning Running the file [sol@hiqdev.com]
    - [cf2dd97] 2015-07-09 improved initialization: + try ./bin/hidev [sol@hiqdev.com]
    - [496217f] 2015-07-09 * composer.json generation: require-dev [sol@hiqdev.com]
    - [40b52c1] 2015-07-09 improved running local bin [sol@hiqdev.com]
    - [ab0ecae] 2015-07-09 improved initialization, + localbin execution [sol@hiqdev.com]
    - [1d5fb22] 2015-07-09 still redoing parent to plugins [sol@hiqdev.com]
    - [317f58c] 2015-07-09 improved initialization [sol@hiqdev.com]
    - [212d220] 2015-07-09 * CommitsHandler::renderDate minor fix [sol@hiqdev.com]
    - [445d4df] 2015-07-08 php-cs-fixed [sol@hiqdev.com]
    - [57c98f1] 2015-07-07 + require-dev [sol@hiqdev.com]
    - [327628e] 2015-07-07 redone all initialization for pluggable parent config [sol@hiqdev.com]
    - [26f3f1e] 2015-07-07 - AuthorGoal [sol@hiqdev.com]
- Changed source dir: moved to src
    - [39754c6] 2015-07-09 great moving to src dir [sol@hiqdev.com]
- Added initial Getting started doc
    - [62c158d] 2015-07-11 docs [sol@hiqdev.com]
    - [48b75d3] 2015-07-10 * docs/GettingStarted.md [sol@hiqdev.com]
    - [e06aa69] 2015-07-04 Update GettingStarted.md [sol@hiqdev.com]
    - [13540c0] 2015-07-04 Create GettingStarted.md [sol@hiqdev.com]
    - [a4f2874] 2015-07-05 Update GettingStarted.md [sol@hiqdev.com]
    - [c7f0349] 2015-07-05 Update GettingStarted.md [sol@hiqdev.com]
- Changed change log to follow keepachangelog.com recomendations
    - [1c354e3] 2015-07-04 Changed change log to follow keepachangelog.com recomendations [sol@hiqdev.com]
    - [0610949] 2015-07-04 added docs/BestPractices.md [sol@hiqdev.com]
    - [15e02ae] 2015-07-04 changed CommitsHandler::renderDate for ISO date formatting [sol@hiqdev.com]
    - [caa6c7f] 2015-07-04 Update CHANGELOG.md [sol@hiqdev.com]
    - [98ee9c9] 2015-07-04 Update CHANGELOG.md [sol@hiqdev.com]
- Changed roadmap
    - [2df0c08] 2015-07-12 * ROADMAP [sol@hiqdev.com]
    - [918838a] 2015-07-12 * ROADMAP [sol@hiqdev.com]
    - [3ab4873] 2015-07-11 * ROADMAP [sol@hiqdev.com]
    - [0933afb] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [41012fc] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [5121836] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [b4d975a] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [0330b4b] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [38a2637] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [7407b96] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [d6d02d7] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
    - [8e45be6] 2015-07-04 Update ROADMAP.md [sol@hiqdev.com]
- Added tests
    - [180477e] 2015-06-30 + codeception.yml [sol@hiqdev.com]
- Added generate goal: generate file by template and params
    - [2235ef0] 2015-07-03 * TemplateHandler: + pass file to template [sol@hiqdev.com]
    - [9de9f43] 2015-06-30 + generate/mkdir action [sol@hiqdev.com]
    - [34d8231] 2015-06-29 + GenerateGoal [sol@hiqdev.com]
    - [9e9784f] 2015-06-29 small but good fix to extend from console\Controller <- base\Controller [sol@hiqdev.com]
- Added codeception plugin
    - [233d4be] 2015-06-28 redone goals name -> goalName [sol@hiqdev.com]
    - [e731acd] 2015-06-28 crutched yaml rendering [sol@hiqdev.com]
    - [055defb] 2015-06-28 + require plugins hidev-codeception/php-cs-fixer [sol@hiqdev.com]
- Changed config loading
    - [e26d2b5] 2015-06-27 redone File/Goal::exists [sol@hiqdev.com]
    - [76546e7] 2015-06-27 * .hidev/config.yml: - composer.json config goes to composer.json [sol@hiqdev.com]
    - [1384678] 2015-06-27 improved actionLoad in base/File and ComposerJsonGoal [sol@hiqdev.com]
    - [f8996bc] 2015-06-27 used `module->runAction` at actionDeps [sol@hiqdev.com]
    - [e4882d4] 2015-06-27 * ComposerJsonGoal + standart load [sol@hiqdev.com]
- Changed: redone goals like controllers
    - [a0b4883] 2015-07-11 removed old controllers/DefaultController [sol@hiqdev.com]
    - [ed7537c] 2015-06-30 + Application::runRequest [sol@hiqdev.com]
    - [37d11fa] 2015-06-26 renamed actions to actionPerform/Make/... [sol@hiqdev.com]
    - [c069025] 2015-06-26 + parent/update action [sol@hiqdev.com]
    - [cdcf25f] 2015-06-24 php-cs-fixed [sol@hiqdev.com]
    - [c4d8a63] 2015-06-24 + getting default goal [sol@hiqdev.com]
    - [0888788] 2015-06-24 redoing goals like controllers [sol@hiqdev.com]
    - [bf724ab] 2015-06-23 changelog [sol@hiqdev.com]
    - [32be392] 2015-06-23 * roadmap [sol@hiqdev.com]

## [0.0.7] - 2015-06-19

- Changed composer.json: dont add empty require
    - [fd344b8] 2015-06-19 + delete require if empty [sol@hiqdev.com]
- Fixed code styling with php-cs-fixer
    - [9605650] 2015-06-19 php-cs-fixed [sol@hiqdev.com]
- Added php-cs-fixer plugin
    - [c87d8c7] 2015-06-18 php-cs-fixing [sol@hiqdev.com]
    - [af2097f] 2015-06-18 + Helper::asplit [sol@hiqdev.com]
    - [c71aa85] 2015-06-18 - views/CHANGELOG.php cause it is not needed anymore [sol@hiqdev.com]
    - [7b79e7a] 2015-06-18 php-cs-fixed [sol@hiqdev.com]
    - [e155570] 2015-06-18 + `Twig_Extension_StringLoader` for `template_from_string` [sol@hiqdev.com]
    - [8de7066] 2015-06-18 php-cs-fixing [sol@hiqdev.com]
    - [492d5c3] 2015-06-18 php-cs-fixing [sol@hiqdev.com]
    - [8eaa43f] 2015-06-18 improving `.php_cs` [sol@hiqdev.com]
    - [67c5255] 2015-06-17 inited `.php_cs` [sol@hiqdev.com]
- Added plugin archtecture
    - [26c9579] 2015-06-17 doing plugin architecture [sol@hiqdev.com]
    - [7bacafa] 2015-06-14 + skip Merge branch commits [sol@hiqdev.com]
- Fixed portability
    - [5350f2e] 2015-06-14 improved portability [sol@hiqdev.com]
    - [d48c5a1] 2015-06-09 fixed adding new commits [sol@hiqdev.com]
    - [71a04c5] 2015-06-09 * default package homepage to same as source [sol@hiqdev.com]
    - [0bca3e0] 2015-06-07 small fixes [sol@hiqdev.com]

## [0.0.6] - 2015-06-06

- Changed: GREAT RENAMING OF CLASSES
    - [a9aed7b] 2015-06-06 improved title, description, forum options at package/vendor [sol@hiqdev.com]
    - [3091450] 2015-06-06 GREAT RENAMING OF CLASSES [sol@hiqdev.com]
- Added cool CHANGELOG.md generation
    - [75326d1] 2015-06-06 fixed adding Under development tag [sol@hiqdev.com]
    - [b7f0f9f] 2015-06-05 improved skip minor [sol@hiqdev.com]
    - [3475a27] 2015-06-05 rendering commits fixed [sol@hiqdev.com]
    - [8546f09] 2015-06-05 + skip 'minor' commits at addHistory [sol@hiqdev.com]
    - [5474d01] 2015-06-05 + handlers\Commits::renderLines [sol@hiqdev.com]
    - [54cf1f5] 2015-06-05 + cool CHANGELOG.md generation [sol@hiqdev.com]
    - [8e6c700] 2015-06-04 * default make for goals to load&save [sol@hiqdev.com]
    - [4af195c] 2015-06-03 + getVcs [) at base goal (sol@hiqdev.com]
    - [3ced3b8] 2015-06-03 minor:roadmap [sol@hiqdev.com]
    - [a23782b] 2015-06-03 minor:commits [sol@hiqdev.com]
    - [569e582] 2015-06-03 minor:commits [sol@hiqdev.com]
    - [57a5beb] 2015-06-03 Update commits.md [sol@hiqdev.com]
    - [1f5a9c3] 2015-06-03 Update commits.md [sol@hiqdev.com]
    - [102434a] 2015-06-03 Update commits.md [sol@hiqdev.com]
    - [7d8f7d1] 2015-06-03 + .hidev/commits.md [sol@hiqdev.com]
- Added gen action to generate files by templates
    - [feb986e] 2015-06-02 + gen action to generate files by templates, changed way of looking for templates [sol@hiqdev.com]
- Added "No licence" default license
    - [1bfbeec] 2015-06-02 + default license from vendor, + No license [sol@hiqdev.com]
    - [4a851f3] 2015-06-01 * roadmap [sol@hiqdev.com]

## [0.0.5] - 2015-06-01

- Changed decreased default verbosity
    - [5d56e27] 2015-06-01 Decreased verbosity [sol@hiqdev.com]
    - [dbc04c9] 2015-06-01 fixed parent config cloning [sol@hiqdev.com]

## [0.0.4] - 2015-06-01

- Added twig templates
    - [4078ac2] 2015-06-01 BIG + twig [sol@hiqdev.com]

## [0.0.3] - 2015-06-01

- Added YAML config
    - [b80e4d4] 2015-06-01 BIG + YAML, used for config [sol@hiqdev.com]
- Added ROADMAP.md
    - [13f6f30] 2015-05-31 + ROADMAP.md [sol@hiqdev.com]

## [0.0.2] - 2015-05-30

- Added parent config
    - [1182cdc] 2015-05-30 + ignore .hidev/parent [sol@hiqdev.com]
- Added use of Robo (started robo integration)
- Changed namespace to 'hidev'
    - [ed742a4] 2015-05-30 HUGE + parent config HUGE * namespace beginned + Robo [sol@hiqdev.com]
    - [7817ae0] 2015-05-29 added and used package.namespace for composer.json autoload used package/vendor instead of config->package/vendor [sol@hiqdev.com]
- Fixed different minor thing
    - [de9f755] 2015-05-16 * keywords [sol@hiqdev.com]
    - [cf53e9a] 2015-05-16 + default package description and homepage from vendor homepage [sol@hiqdev.com]
    - [c8b508d] 2015-05-15 * forum [sol@hiqdev.com]
    - [493da06] 2015-05-15 + fullName, source getters [sol@hiqdev.com]
    - [6eb4fc4] 2015-05-15 fixed [sol@hiqdev.com]
    - [acd98f5] 2015-05-14 renamed rawItem <- getRaw [sol@hiqdev.com]
    - [a669a77] 2015-05-14 - `Config::_defaults` [sol@hiqdev.com]
    - [8470ddc] 2015-05-14 * composer requires to yii2 stable not dev [sol@hiqdev.com]

## [0.0.1] - 2015-05-12

- Added basics
- Added colorized console output
    - [98d97df] 2015-05-12 + styled Console log output [sol@hiqdev.com]
    - [8813192] 2015-05-12 simplified a bit, removed excessive set functions whose work is done automatically [sol@hiqdev.com]
    - [d5968d9] 2015-05-07 + own Application, Request + alises [sol@hiqdev.com]
    - [d9ad2cc] 2015-05-04 + Application, ViewContext move into it from Config [sol@hiqdev.com]
    - [09fb3b4] 2015-05-04 redone to deps looks goog now [sol@hiqdev.com]
- Added README.md generation
- Added CHANGELOG.md generation
    - [cf4564b] 2015-05-02 MINIMUM DONE. URA [sol@hiqdev.com]
    - [303ac77] 2015-05-02 rename homepage <- site [sol@hiqdev.com]
    - [9d801b9] 2015-05-02 fixed: no comments after pattern [sol@hiqdev.com]
    - [67fbd14] 2015-05-02 fixed: no comments after pattern [sol@hiqdev.com]
- Added composer.json generation
    - [4c5554e] 2015-05-02 doing composer.json goal [sol@hiqdev.com]
    - [3101c68] 2015-05-02 doing composer.json goal [sol@hiqdev.com]
- Added simple .gitignore generation
    - [006a0ab] 2015-04-30 + .gitignore [sol@hiqdev.com]
    - [7675d1c] 2015-04-30 + templates looking in .hidev/templates [sol@hiqdev.com]
- Added LICENSE generation
    - [ad8d8d0] 2015-04-30 improving LICENSE [sol@hiqdev.com]
    - [e4b5cd2] 2015-04-30 GREAT move ahead: now making LICENSE :) [sol@hiqdev.com]
    - [04777ec] 2015-04-28 inited [sol@hiqdev.com]
## Development started - 2015-04-28

## [Development started] - 2015-04-28

[a8e0a44]: https://github.com/hiqdev/hidev/commit/a8e0a44
[32cfbc0]: https://github.com/hiqdev/hidev/commit/32cfbc0
[a5a7080]: https://github.com/hiqdev/hidev/commit/a5a7080
[2972338]: https://github.com/hiqdev/hidev/commit/2972338
[6fd2f95]: https://github.com/hiqdev/hidev/commit/6fd2f95
[e0d5355]: https://github.com/hiqdev/hidev/commit/e0d5355
[2d54bb5]: https://github.com/hiqdev/hidev/commit/2d54bb5
[61d7d4d]: https://github.com/hiqdev/hidev/commit/61d7d4d
[5a3d030]: https://github.com/hiqdev/hidev/commit/5a3d030
[71c5e53]: https://github.com/hiqdev/hidev/commit/71c5e53
[7e12fc1]: https://github.com/hiqdev/hidev/commit/7e12fc1
[b4b8e10]: https://github.com/hiqdev/hidev/commit/b4b8e10
[24dff74]: https://github.com/hiqdev/hidev/commit/24dff74
[ff80ee0]: https://github.com/hiqdev/hidev/commit/ff80ee0
[1e626df]: https://github.com/hiqdev/hidev/commit/1e626df
[2f2770b]: https://github.com/hiqdev/hidev/commit/2f2770b
[ab3d1ec]: https://github.com/hiqdev/hidev/commit/ab3d1ec
[32412ca]: https://github.com/hiqdev/hidev/commit/32412ca
[7c5fbbb]: https://github.com/hiqdev/hidev/commit/7c5fbbb
[8eb455e]: https://github.com/hiqdev/hidev/commit/8eb455e
[66b43c5]: https://github.com/hiqdev/hidev/commit/66b43c5
[a4bef9c]: https://github.com/hiqdev/hidev/commit/a4bef9c
[d490419]: https://github.com/hiqdev/hidev/commit/d490419
[f961e79]: https://github.com/hiqdev/hidev/commit/f961e79
[ea170e3]: https://github.com/hiqdev/hidev/commit/ea170e3
[639f133]: https://github.com/hiqdev/hidev/commit/639f133
[5c02142]: https://github.com/hiqdev/hidev/commit/5c02142
[c235413]: https://github.com/hiqdev/hidev/commit/c235413
[d99b3eb]: https://github.com/hiqdev/hidev/commit/d99b3eb
[4aa3cc4]: https://github.com/hiqdev/hidev/commit/4aa3cc4
[9db4c09]: https://github.com/hiqdev/hidev/commit/9db4c09
[b1bf360]: https://github.com/hiqdev/hidev/commit/b1bf360
[16e130b]: https://github.com/hiqdev/hidev/commit/16e130b
[7104741]: https://github.com/hiqdev/hidev/commit/7104741
[2efa1a1]: https://github.com/hiqdev/hidev/commit/2efa1a1
[40bc31c]: https://github.com/hiqdev/hidev/commit/40bc31c
[05cfb26]: https://github.com/hiqdev/hidev/commit/05cfb26
[4807e1c]: https://github.com/hiqdev/hidev/commit/4807e1c
[d4a481f]: https://github.com/hiqdev/hidev/commit/d4a481f
[5feebc7]: https://github.com/hiqdev/hidev/commit/5feebc7
[2318a07]: https://github.com/hiqdev/hidev/commit/2318a07
[d10132e]: https://github.com/hiqdev/hidev/commit/d10132e
[2b8592a]: https://github.com/hiqdev/hidev/commit/2b8592a
[8c5ef59]: https://github.com/hiqdev/hidev/commit/8c5ef59
[34300e8]: https://github.com/hiqdev/hidev/commit/34300e8
[aff402f]: https://github.com/hiqdev/hidev/commit/aff402f
[7d90a5e]: https://github.com/hiqdev/hidev/commit/7d90a5e
[37c8406]: https://github.com/hiqdev/hidev/commit/37c8406
[fb36fc9]: https://github.com/hiqdev/hidev/commit/fb36fc9
[17bfe3f]: https://github.com/hiqdev/hidev/commit/17bfe3f
[210ff02]: https://github.com/hiqdev/hidev/commit/210ff02
[9a246f3]: https://github.com/hiqdev/hidev/commit/9a246f3
[d905e0f]: https://github.com/hiqdev/hidev/commit/d905e0f
[6243660]: https://github.com/hiqdev/hidev/commit/6243660
[2d359c1]: https://github.com/hiqdev/hidev/commit/2d359c1
[951f0fa]: https://github.com/hiqdev/hidev/commit/951f0fa
[e0cd62b]: https://github.com/hiqdev/hidev/commit/e0cd62b
[1ab4f8e]: https://github.com/hiqdev/hidev/commit/1ab4f8e
[596dc67]: https://github.com/hiqdev/hidev/commit/596dc67
[ccead93]: https://github.com/hiqdev/hidev/commit/ccead93
[26e6f42]: https://github.com/hiqdev/hidev/commit/26e6f42
[6563e6d]: https://github.com/hiqdev/hidev/commit/6563e6d
[671164a]: https://github.com/hiqdev/hidev/commit/671164a
[ede5419]: https://github.com/hiqdev/hidev/commit/ede5419
[6514c7d]: https://github.com/hiqdev/hidev/commit/6514c7d
[9259403]: https://github.com/hiqdev/hidev/commit/9259403
[9aafba9]: https://github.com/hiqdev/hidev/commit/9aafba9
[c186f54]: https://github.com/hiqdev/hidev/commit/c186f54
[c4a1380]: https://github.com/hiqdev/hidev/commit/c4a1380
[0d87f6f]: https://github.com/hiqdev/hidev/commit/0d87f6f
[2fbeaa4]: https://github.com/hiqdev/hidev/commit/2fbeaa4
[a894630]: https://github.com/hiqdev/hidev/commit/a894630
[21166ab]: https://github.com/hiqdev/hidev/commit/21166ab
[e8776fd]: https://github.com/hiqdev/hidev/commit/e8776fd
[24d81b7]: https://github.com/hiqdev/hidev/commit/24d81b7
[a72c3cb]: https://github.com/hiqdev/hidev/commit/a72c3cb
[9b4e898]: https://github.com/hiqdev/hidev/commit/9b4e898
[af84f05]: https://github.com/hiqdev/hidev/commit/af84f05
[f588f49]: https://github.com/hiqdev/hidev/commit/f588f49
[165bc08]: https://github.com/hiqdev/hidev/commit/165bc08
[5142b11]: https://github.com/hiqdev/hidev/commit/5142b11
[66a75bc]: https://github.com/hiqdev/hidev/commit/66a75bc
[1257928]: https://github.com/hiqdev/hidev/commit/1257928
[04baf42]: https://github.com/hiqdev/hidev/commit/04baf42
[7c43216]: https://github.com/hiqdev/hidev/commit/7c43216
[c7f604b]: https://github.com/hiqdev/hidev/commit/c7f604b
[732eec5]: https://github.com/hiqdev/hidev/commit/732eec5
[bb6db97]: https://github.com/hiqdev/hidev/commit/bb6db97
[d905002]: https://github.com/hiqdev/hidev/commit/d905002
[e8761fe]: https://github.com/hiqdev/hidev/commit/e8761fe
[4956d3a]: https://github.com/hiqdev/hidev/commit/4956d3a
[c1a7eae]: https://github.com/hiqdev/hidev/commit/c1a7eae
[41f76b5]: https://github.com/hiqdev/hidev/commit/41f76b5
[fd5497c]: https://github.com/hiqdev/hidev/commit/fd5497c
[eecb999]: https://github.com/hiqdev/hidev/commit/eecb999
[bd9142a]: https://github.com/hiqdev/hidev/commit/bd9142a
[af54ce3]: https://github.com/hiqdev/hidev/commit/af54ce3
[06571e9]: https://github.com/hiqdev/hidev/commit/06571e9
[c331ed4]: https://github.com/hiqdev/hidev/commit/c331ed4
[d0078b4]: https://github.com/hiqdev/hidev/commit/d0078b4
[41e8686]: https://github.com/hiqdev/hidev/commit/41e8686
[e309819]: https://github.com/hiqdev/hidev/commit/e309819
[361821f]: https://github.com/hiqdev/hidev/commit/361821f
[9039c2b]: https://github.com/hiqdev/hidev/commit/9039c2b
[ef8670a]: https://github.com/hiqdev/hidev/commit/ef8670a
[0378e33]: https://github.com/hiqdev/hidev/commit/0378e33
[274d419]: https://github.com/hiqdev/hidev/commit/274d419
[b8c8f11]: https://github.com/hiqdev/hidev/commit/b8c8f11
[001c935]: https://github.com/hiqdev/hidev/commit/001c935
[7348679]: https://github.com/hiqdev/hidev/commit/7348679
[48eeab0]: https://github.com/hiqdev/hidev/commit/48eeab0
[960b60c]: https://github.com/hiqdev/hidev/commit/960b60c
[1a8499d]: https://github.com/hiqdev/hidev/commit/1a8499d
[5d0a339]: https://github.com/hiqdev/hidev/commit/5d0a339
[35d4887]: https://github.com/hiqdev/hidev/commit/35d4887
[bdb7086]: https://github.com/hiqdev/hidev/commit/bdb7086
[73d19d3]: https://github.com/hiqdev/hidev/commit/73d19d3
[e513542]: https://github.com/hiqdev/hidev/commit/e513542
[a6f476e]: https://github.com/hiqdev/hidev/commit/a6f476e
[9c48c87]: https://github.com/hiqdev/hidev/commit/9c48c87
[84af45b]: https://github.com/hiqdev/hidev/commit/84af45b
[675ff34]: https://github.com/hiqdev/hidev/commit/675ff34
[d18dbf9]: https://github.com/hiqdev/hidev/commit/d18dbf9
[9465389]: https://github.com/hiqdev/hidev/commit/9465389
[c94dfb3]: https://github.com/hiqdev/hidev/commit/c94dfb3
[eb61867]: https://github.com/hiqdev/hidev/commit/eb61867
[fe52e0b]: https://github.com/hiqdev/hidev/commit/fe52e0b
[95c5736]: https://github.com/hiqdev/hidev/commit/95c5736
[7fd043d]: https://github.com/hiqdev/hidev/commit/7fd043d
[66e1684]: https://github.com/hiqdev/hidev/commit/66e1684
[2c93cbc]: https://github.com/hiqdev/hidev/commit/2c93cbc
[667564a]: https://github.com/hiqdev/hidev/commit/667564a
[5e410f8]: https://github.com/hiqdev/hidev/commit/5e410f8
[4ca3470]: https://github.com/hiqdev/hidev/commit/4ca3470
[eb6e26a]: https://github.com/hiqdev/hidev/commit/eb6e26a
[7ac88a0]: https://github.com/hiqdev/hidev/commit/7ac88a0
[da01f6f]: https://github.com/hiqdev/hidev/commit/da01f6f
[53b78cc]: https://github.com/hiqdev/hidev/commit/53b78cc
[129309c]: https://github.com/hiqdev/hidev/commit/129309c
[3fdb006]: https://github.com/hiqdev/hidev/commit/3fdb006
[2739e53]: https://github.com/hiqdev/hidev/commit/2739e53
[f9f8ca1]: https://github.com/hiqdev/hidev/commit/f9f8ca1
[60fba25]: https://github.com/hiqdev/hidev/commit/60fba25
[5d775fa]: https://github.com/hiqdev/hidev/commit/5d775fa
[9cc9413]: https://github.com/hiqdev/hidev/commit/9cc9413
[5b5b7c7]: https://github.com/hiqdev/hidev/commit/5b5b7c7
[efc2436]: https://github.com/hiqdev/hidev/commit/efc2436
[797c0ed]: https://github.com/hiqdev/hidev/commit/797c0ed
[38e6772]: https://github.com/hiqdev/hidev/commit/38e6772
[dab1d8d]: https://github.com/hiqdev/hidev/commit/dab1d8d
[88efe3f]: https://github.com/hiqdev/hidev/commit/88efe3f
[fe14804]: https://github.com/hiqdev/hidev/commit/fe14804
[39ddbc3]: https://github.com/hiqdev/hidev/commit/39ddbc3
[5c90250]: https://github.com/hiqdev/hidev/commit/5c90250
[1a4bfac]: https://github.com/hiqdev/hidev/commit/1a4bfac
[44cdcf4]: https://github.com/hiqdev/hidev/commit/44cdcf4
[97da7e1]: https://github.com/hiqdev/hidev/commit/97da7e1
[4b5deff]: https://github.com/hiqdev/hidev/commit/4b5deff
[3a0dc90]: https://github.com/hiqdev/hidev/commit/3a0dc90
[9c2fd91]: https://github.com/hiqdev/hidev/commit/9c2fd91
[bb4d228]: https://github.com/hiqdev/hidev/commit/bb4d228
[521d2d5]: https://github.com/hiqdev/hidev/commit/521d2d5
[1a02e54]: https://github.com/hiqdev/hidev/commit/1a02e54
[8a53c89]: https://github.com/hiqdev/hidev/commit/8a53c89
[ca62f72]: https://github.com/hiqdev/hidev/commit/ca62f72
[ba087e2]: https://github.com/hiqdev/hidev/commit/ba087e2
[2a90b09]: https://github.com/hiqdev/hidev/commit/2a90b09
[a9c7153]: https://github.com/hiqdev/hidev/commit/a9c7153
[325446e]: https://github.com/hiqdev/hidev/commit/325446e
[b47ceba]: https://github.com/hiqdev/hidev/commit/b47ceba
[0003a33]: https://github.com/hiqdev/hidev/commit/0003a33
[92b2482]: https://github.com/hiqdev/hidev/commit/92b2482
[22263b6]: https://github.com/hiqdev/hidev/commit/22263b6
[e9b78a1]: https://github.com/hiqdev/hidev/commit/e9b78a1
[74ba260]: https://github.com/hiqdev/hidev/commit/74ba260
[a47060f]: https://github.com/hiqdev/hidev/commit/a47060f
[e5936b0]: https://github.com/hiqdev/hidev/commit/e5936b0
[d2b94eb]: https://github.com/hiqdev/hidev/commit/d2b94eb
[83ed325]: https://github.com/hiqdev/hidev/commit/83ed325
[9675fa6]: https://github.com/hiqdev/hidev/commit/9675fa6
[66e2166]: https://github.com/hiqdev/hidev/commit/66e2166
[0ff3351]: https://github.com/hiqdev/hidev/commit/0ff3351
[b4a6ad3]: https://github.com/hiqdev/hidev/commit/b4a6ad3
[f68e1dc]: https://github.com/hiqdev/hidev/commit/f68e1dc
[8f5eda1]: https://github.com/hiqdev/hidev/commit/8f5eda1
[da3731a]: https://github.com/hiqdev/hidev/commit/da3731a
[ea6dd43]: https://github.com/hiqdev/hidev/commit/ea6dd43
[404225c]: https://github.com/hiqdev/hidev/commit/404225c
[22637e9]: https://github.com/hiqdev/hidev/commit/22637e9
[d2de282]: https://github.com/hiqdev/hidev/commit/d2de282
[08f8789]: https://github.com/hiqdev/hidev/commit/08f8789
[571496d]: https://github.com/hiqdev/hidev/commit/571496d
[164599f]: https://github.com/hiqdev/hidev/commit/164599f
[7fb6929]: https://github.com/hiqdev/hidev/commit/7fb6929
[b307d56]: https://github.com/hiqdev/hidev/commit/b307d56
[cc841c3]: https://github.com/hiqdev/hidev/commit/cc841c3
[d9ad16c]: https://github.com/hiqdev/hidev/commit/d9ad16c
[5628857]: https://github.com/hiqdev/hidev/commit/5628857
[36fd241]: https://github.com/hiqdev/hidev/commit/36fd241
[833e973]: https://github.com/hiqdev/hidev/commit/833e973
[93f3510]: https://github.com/hiqdev/hidev/commit/93f3510
[ce3ad2d]: https://github.com/hiqdev/hidev/commit/ce3ad2d
[24cb56b]: https://github.com/hiqdev/hidev/commit/24cb56b
[91903fe]: https://github.com/hiqdev/hidev/commit/91903fe
[e7b3aa5]: https://github.com/hiqdev/hidev/commit/e7b3aa5
[4692567]: https://github.com/hiqdev/hidev/commit/4692567
[4593f67]: https://github.com/hiqdev/hidev/commit/4593f67
[56d9353]: https://github.com/hiqdev/hidev/commit/56d9353
[4d4cc92]: https://github.com/hiqdev/hidev/commit/4d4cc92
[4e0b313]: https://github.com/hiqdev/hidev/commit/4e0b313
[4996078]: https://github.com/hiqdev/hidev/commit/4996078
[5dee3f0]: https://github.com/hiqdev/hidev/commit/5dee3f0
[3183775]: https://github.com/hiqdev/hidev/commit/3183775
[2b908eb]: https://github.com/hiqdev/hidev/commit/2b908eb
[59ea763]: https://github.com/hiqdev/hidev/commit/59ea763
[fdad63e]: https://github.com/hiqdev/hidev/commit/fdad63e
[de5d98f]: https://github.com/hiqdev/hidev/commit/de5d98f
[84f12c8]: https://github.com/hiqdev/hidev/commit/84f12c8
[073dc7a]: https://github.com/hiqdev/hidev/commit/073dc7a
[b33cf78]: https://github.com/hiqdev/hidev/commit/b33cf78
[ca66d21]: https://github.com/hiqdev/hidev/commit/ca66d21
[c8d02f2]: https://github.com/hiqdev/hidev/commit/c8d02f2
[1558eac]: https://github.com/hiqdev/hidev/commit/1558eac
[62a6737]: https://github.com/hiqdev/hidev/commit/62a6737
[b1833cc]: https://github.com/hiqdev/hidev/commit/b1833cc
[da94efe]: https://github.com/hiqdev/hidev/commit/da94efe
[4d6ce1d]: https://github.com/hiqdev/hidev/commit/4d6ce1d
[1c40e5c]: https://github.com/hiqdev/hidev/commit/1c40e5c
[3a19a38]: https://github.com/hiqdev/hidev/commit/3a19a38
[daa3eb2]: https://github.com/hiqdev/hidev/commit/daa3eb2
[69fedec]: https://github.com/hiqdev/hidev/commit/69fedec
[77dbdaa]: https://github.com/hiqdev/hidev/commit/77dbdaa
[c7c632e]: https://github.com/hiqdev/hidev/commit/c7c632e
[e3b0fc0]: https://github.com/hiqdev/hidev/commit/e3b0fc0
[c668afe]: https://github.com/hiqdev/hidev/commit/c668afe
[6bcf138]: https://github.com/hiqdev/hidev/commit/6bcf138
[1f7fa85]: https://github.com/hiqdev/hidev/commit/1f7fa85
[9036920]: https://github.com/hiqdev/hidev/commit/9036920
[9936b13]: https://github.com/hiqdev/hidev/commit/9936b13
[c79d8e5]: https://github.com/hiqdev/hidev/commit/c79d8e5
[5cedb80]: https://github.com/hiqdev/hidev/commit/5cedb80
[562e42a]: https://github.com/hiqdev/hidev/commit/562e42a
[7ea638c]: https://github.com/hiqdev/hidev/commit/7ea638c
[b0179d6]: https://github.com/hiqdev/hidev/commit/b0179d6
[3a15706]: https://github.com/hiqdev/hidev/commit/3a15706
[b11eae2]: https://github.com/hiqdev/hidev/commit/b11eae2
[b521bef]: https://github.com/hiqdev/hidev/commit/b521bef
[8259bc7]: https://github.com/hiqdev/hidev/commit/8259bc7
[76aae11]: https://github.com/hiqdev/hidev/commit/76aae11
[61bb4b4]: https://github.com/hiqdev/hidev/commit/61bb4b4
[b186d89]: https://github.com/hiqdev/hidev/commit/b186d89
[8de4839]: https://github.com/hiqdev/hidev/commit/8de4839
[e5f0713]: https://github.com/hiqdev/hidev/commit/e5f0713
[7049343]: https://github.com/hiqdev/hidev/commit/7049343
[c114e03]: https://github.com/hiqdev/hidev/commit/c114e03
[fda72aa]: https://github.com/hiqdev/hidev/commit/fda72aa
[1541aa7]: https://github.com/hiqdev/hidev/commit/1541aa7
[7794937]: https://github.com/hiqdev/hidev/commit/7794937
[be32612]: https://github.com/hiqdev/hidev/commit/be32612
[65a9b07]: https://github.com/hiqdev/hidev/commit/65a9b07
[31d0ba6]: https://github.com/hiqdev/hidev/commit/31d0ba6
[85a0ff7]: https://github.com/hiqdev/hidev/commit/85a0ff7
[ce7ea96]: https://github.com/hiqdev/hidev/commit/ce7ea96
[91a543c]: https://github.com/hiqdev/hidev/commit/91a543c
[2bd5bc5]: https://github.com/hiqdev/hidev/commit/2bd5bc5
[3439892]: https://github.com/hiqdev/hidev/commit/3439892
[9d938de]: https://github.com/hiqdev/hidev/commit/9d938de
[6323f7c]: https://github.com/hiqdev/hidev/commit/6323f7c
[c544564]: https://github.com/hiqdev/hidev/commit/c544564
[a533502]: https://github.com/hiqdev/hidev/commit/a533502
[cdf01e7]: https://github.com/hiqdev/hidev/commit/cdf01e7
[68fb235]: https://github.com/hiqdev/hidev/commit/68fb235
[cae13d3]: https://github.com/hiqdev/hidev/commit/cae13d3
[c17149c]: https://github.com/hiqdev/hidev/commit/c17149c
[7841c69]: https://github.com/hiqdev/hidev/commit/7841c69
[7e900c3]: https://github.com/hiqdev/hidev/commit/7e900c3
[888674e]: https://github.com/hiqdev/hidev/commit/888674e
[25fa62d]: https://github.com/hiqdev/hidev/commit/25fa62d
[0bb0366]: https://github.com/hiqdev/hidev/commit/0bb0366
[5bfde10]: https://github.com/hiqdev/hidev/commit/5bfde10
[cbe63ec]: https://github.com/hiqdev/hidev/commit/cbe63ec
[cba9771]: https://github.com/hiqdev/hidev/commit/cba9771
[adfd43e]: https://github.com/hiqdev/hidev/commit/adfd43e
[f21e66d]: https://github.com/hiqdev/hidev/commit/f21e66d
[10f28b4]: https://github.com/hiqdev/hidev/commit/10f28b4
[a96c530]: https://github.com/hiqdev/hidev/commit/a96c530
[a0ee0df]: https://github.com/hiqdev/hidev/commit/a0ee0df
[397193c]: https://github.com/hiqdev/hidev/commit/397193c
[3a01b0b]: https://github.com/hiqdev/hidev/commit/3a01b0b
[c798edc]: https://github.com/hiqdev/hidev/commit/c798edc
[23d719a]: https://github.com/hiqdev/hidev/commit/23d719a
[aa38c08]: https://github.com/hiqdev/hidev/commit/aa38c08
[f14cedb]: https://github.com/hiqdev/hidev/commit/f14cedb
[0f4634f]: https://github.com/hiqdev/hidev/commit/0f4634f
[ec5b407]: https://github.com/hiqdev/hidev/commit/ec5b407
[f95fe40]: https://github.com/hiqdev/hidev/commit/f95fe40
[64d022d]: https://github.com/hiqdev/hidev/commit/64d022d
[829f22b]: https://github.com/hiqdev/hidev/commit/829f22b
[cfe368f]: https://github.com/hiqdev/hidev/commit/cfe368f
[687da1e]: https://github.com/hiqdev/hidev/commit/687da1e
[ee0043c]: https://github.com/hiqdev/hidev/commit/ee0043c
[c96bec0]: https://github.com/hiqdev/hidev/commit/c96bec0
[e573d4e]: https://github.com/hiqdev/hidev/commit/e573d4e
[7001f7e]: https://github.com/hiqdev/hidev/commit/7001f7e
[e90976f]: https://github.com/hiqdev/hidev/commit/e90976f
[de455b9]: https://github.com/hiqdev/hidev/commit/de455b9
[f840ce3]: https://github.com/hiqdev/hidev/commit/f840ce3
[4aa140b]: https://github.com/hiqdev/hidev/commit/4aa140b
[4918bc2]: https://github.com/hiqdev/hidev/commit/4918bc2
[81dca07]: https://github.com/hiqdev/hidev/commit/81dca07
[3660961]: https://github.com/hiqdev/hidev/commit/3660961
[f34ccb8]: https://github.com/hiqdev/hidev/commit/f34ccb8
[ed8d93f]: https://github.com/hiqdev/hidev/commit/ed8d93f
[5798ab8]: https://github.com/hiqdev/hidev/commit/5798ab8
[144715e]: https://github.com/hiqdev/hidev/commit/144715e
[1e1ef93]: https://github.com/hiqdev/hidev/commit/1e1ef93
[e5c212f]: https://github.com/hiqdev/hidev/commit/e5c212f
[f7dc1ee]: https://github.com/hiqdev/hidev/commit/f7dc1ee
[bf13b89]: https://github.com/hiqdev/hidev/commit/bf13b89
[f4a8f5b]: https://github.com/hiqdev/hidev/commit/f4a8f5b
[675fa1b]: https://github.com/hiqdev/hidev/commit/675fa1b
[8ea5658]: https://github.com/hiqdev/hidev/commit/8ea5658
[46c110b]: https://github.com/hiqdev/hidev/commit/46c110b
[52733f9]: https://github.com/hiqdev/hidev/commit/52733f9
[8600bf1]: https://github.com/hiqdev/hidev/commit/8600bf1
[c7fcc13]: https://github.com/hiqdev/hidev/commit/c7fcc13
[9524e62]: https://github.com/hiqdev/hidev/commit/9524e62
[0c1619f]: https://github.com/hiqdev/hidev/commit/0c1619f
[00d2fdf]: https://github.com/hiqdev/hidev/commit/00d2fdf
[dd5132a]: https://github.com/hiqdev/hidev/commit/dd5132a
[62c053e]: https://github.com/hiqdev/hidev/commit/62c053e
[8899ef1]: https://github.com/hiqdev/hidev/commit/8899ef1
[613e134]: https://github.com/hiqdev/hidev/commit/613e134
[af65f57]: https://github.com/hiqdev/hidev/commit/af65f57
[cf2dd97]: https://github.com/hiqdev/hidev/commit/cf2dd97
[496217f]: https://github.com/hiqdev/hidev/commit/496217f
[40b52c1]: https://github.com/hiqdev/hidev/commit/40b52c1
[ab0ecae]: https://github.com/hiqdev/hidev/commit/ab0ecae
[1d5fb22]: https://github.com/hiqdev/hidev/commit/1d5fb22
[317f58c]: https://github.com/hiqdev/hidev/commit/317f58c
[212d220]: https://github.com/hiqdev/hidev/commit/212d220
[445d4df]: https://github.com/hiqdev/hidev/commit/445d4df
[57c98f1]: https://github.com/hiqdev/hidev/commit/57c98f1
[327628e]: https://github.com/hiqdev/hidev/commit/327628e
[26f3f1e]: https://github.com/hiqdev/hidev/commit/26f3f1e
[39754c6]: https://github.com/hiqdev/hidev/commit/39754c6
[62c158d]: https://github.com/hiqdev/hidev/commit/62c158d
[48b75d3]: https://github.com/hiqdev/hidev/commit/48b75d3
[e06aa69]: https://github.com/hiqdev/hidev/commit/e06aa69
[13540c0]: https://github.com/hiqdev/hidev/commit/13540c0
[a4f2874]: https://github.com/hiqdev/hidev/commit/a4f2874
[c7f0349]: https://github.com/hiqdev/hidev/commit/c7f0349
[1c354e3]: https://github.com/hiqdev/hidev/commit/1c354e3
[0610949]: https://github.com/hiqdev/hidev/commit/0610949
[15e02ae]: https://github.com/hiqdev/hidev/commit/15e02ae
[caa6c7f]: https://github.com/hiqdev/hidev/commit/caa6c7f
[98ee9c9]: https://github.com/hiqdev/hidev/commit/98ee9c9
[2df0c08]: https://github.com/hiqdev/hidev/commit/2df0c08
[918838a]: https://github.com/hiqdev/hidev/commit/918838a
[3ab4873]: https://github.com/hiqdev/hidev/commit/3ab4873
[0933afb]: https://github.com/hiqdev/hidev/commit/0933afb
[41012fc]: https://github.com/hiqdev/hidev/commit/41012fc
[5121836]: https://github.com/hiqdev/hidev/commit/5121836
[b4d975a]: https://github.com/hiqdev/hidev/commit/b4d975a
[0330b4b]: https://github.com/hiqdev/hidev/commit/0330b4b
[38a2637]: https://github.com/hiqdev/hidev/commit/38a2637
[7407b96]: https://github.com/hiqdev/hidev/commit/7407b96
[d6d02d7]: https://github.com/hiqdev/hidev/commit/d6d02d7
[8e45be6]: https://github.com/hiqdev/hidev/commit/8e45be6
[180477e]: https://github.com/hiqdev/hidev/commit/180477e
[2235ef0]: https://github.com/hiqdev/hidev/commit/2235ef0
[9de9f43]: https://github.com/hiqdev/hidev/commit/9de9f43
[34d8231]: https://github.com/hiqdev/hidev/commit/34d8231
[9e9784f]: https://github.com/hiqdev/hidev/commit/9e9784f
[233d4be]: https://github.com/hiqdev/hidev/commit/233d4be
[e731acd]: https://github.com/hiqdev/hidev/commit/e731acd
[055defb]: https://github.com/hiqdev/hidev/commit/055defb
[e26d2b5]: https://github.com/hiqdev/hidev/commit/e26d2b5
[76546e7]: https://github.com/hiqdev/hidev/commit/76546e7
[1384678]: https://github.com/hiqdev/hidev/commit/1384678
[f8996bc]: https://github.com/hiqdev/hidev/commit/f8996bc
[e4882d4]: https://github.com/hiqdev/hidev/commit/e4882d4
[a0b4883]: https://github.com/hiqdev/hidev/commit/a0b4883
[ed7537c]: https://github.com/hiqdev/hidev/commit/ed7537c
[37d11fa]: https://github.com/hiqdev/hidev/commit/37d11fa
[c069025]: https://github.com/hiqdev/hidev/commit/c069025
[cdcf25f]: https://github.com/hiqdev/hidev/commit/cdcf25f
[c4d8a63]: https://github.com/hiqdev/hidev/commit/c4d8a63
[0888788]: https://github.com/hiqdev/hidev/commit/0888788
[bf724ab]: https://github.com/hiqdev/hidev/commit/bf724ab
[32be392]: https://github.com/hiqdev/hidev/commit/32be392
[fd344b8]: https://github.com/hiqdev/hidev/commit/fd344b8
[9605650]: https://github.com/hiqdev/hidev/commit/9605650
[c87d8c7]: https://github.com/hiqdev/hidev/commit/c87d8c7
[af2097f]: https://github.com/hiqdev/hidev/commit/af2097f
[c71aa85]: https://github.com/hiqdev/hidev/commit/c71aa85
[7b79e7a]: https://github.com/hiqdev/hidev/commit/7b79e7a
[e155570]: https://github.com/hiqdev/hidev/commit/e155570
[8de7066]: https://github.com/hiqdev/hidev/commit/8de7066
[492d5c3]: https://github.com/hiqdev/hidev/commit/492d5c3
[8eaa43f]: https://github.com/hiqdev/hidev/commit/8eaa43f
[67c5255]: https://github.com/hiqdev/hidev/commit/67c5255
[26c9579]: https://github.com/hiqdev/hidev/commit/26c9579
[7bacafa]: https://github.com/hiqdev/hidev/commit/7bacafa
[5350f2e]: https://github.com/hiqdev/hidev/commit/5350f2e
[d48c5a1]: https://github.com/hiqdev/hidev/commit/d48c5a1
[71a04c5]: https://github.com/hiqdev/hidev/commit/71a04c5
[0bca3e0]: https://github.com/hiqdev/hidev/commit/0bca3e0
[a9aed7b]: https://github.com/hiqdev/hidev/commit/a9aed7b
[3091450]: https://github.com/hiqdev/hidev/commit/3091450
[75326d1]: https://github.com/hiqdev/hidev/commit/75326d1
[b7f0f9f]: https://github.com/hiqdev/hidev/commit/b7f0f9f
[3475a27]: https://github.com/hiqdev/hidev/commit/3475a27
[8546f09]: https://github.com/hiqdev/hidev/commit/8546f09
[5474d01]: https://github.com/hiqdev/hidev/commit/5474d01
[54cf1f5]: https://github.com/hiqdev/hidev/commit/54cf1f5
[8e6c700]: https://github.com/hiqdev/hidev/commit/8e6c700
[4af195c]: https://github.com/hiqdev/hidev/commit/4af195c
[3ced3b8]: https://github.com/hiqdev/hidev/commit/3ced3b8
[a23782b]: https://github.com/hiqdev/hidev/commit/a23782b
[569e582]: https://github.com/hiqdev/hidev/commit/569e582
[57a5beb]: https://github.com/hiqdev/hidev/commit/57a5beb
[1f5a9c3]: https://github.com/hiqdev/hidev/commit/1f5a9c3
[102434a]: https://github.com/hiqdev/hidev/commit/102434a
[7d8f7d1]: https://github.com/hiqdev/hidev/commit/7d8f7d1
[feb986e]: https://github.com/hiqdev/hidev/commit/feb986e
[1bfbeec]: https://github.com/hiqdev/hidev/commit/1bfbeec
[4a851f3]: https://github.com/hiqdev/hidev/commit/4a851f3
[5d56e27]: https://github.com/hiqdev/hidev/commit/5d56e27
[dbc04c9]: https://github.com/hiqdev/hidev/commit/dbc04c9
[4078ac2]: https://github.com/hiqdev/hidev/commit/4078ac2
[b80e4d4]: https://github.com/hiqdev/hidev/commit/b80e4d4
[13f6f30]: https://github.com/hiqdev/hidev/commit/13f6f30
[1182cdc]: https://github.com/hiqdev/hidev/commit/1182cdc
[ed742a4]: https://github.com/hiqdev/hidev/commit/ed742a4
[7817ae0]: https://github.com/hiqdev/hidev/commit/7817ae0
[de9f755]: https://github.com/hiqdev/hidev/commit/de9f755
[cf53e9a]: https://github.com/hiqdev/hidev/commit/cf53e9a
[c8b508d]: https://github.com/hiqdev/hidev/commit/c8b508d
[493da06]: https://github.com/hiqdev/hidev/commit/493da06
[6eb4fc4]: https://github.com/hiqdev/hidev/commit/6eb4fc4
[acd98f5]: https://github.com/hiqdev/hidev/commit/acd98f5
[a669a77]: https://github.com/hiqdev/hidev/commit/a669a77
[8470ddc]: https://github.com/hiqdev/hidev/commit/8470ddc
[98d97df]: https://github.com/hiqdev/hidev/commit/98d97df
[8813192]: https://github.com/hiqdev/hidev/commit/8813192
[d5968d9]: https://github.com/hiqdev/hidev/commit/d5968d9
[d9ad2cc]: https://github.com/hiqdev/hidev/commit/d9ad2cc
[09fb3b4]: https://github.com/hiqdev/hidev/commit/09fb3b4
[cf4564b]: https://github.com/hiqdev/hidev/commit/cf4564b
[303ac77]: https://github.com/hiqdev/hidev/commit/303ac77
[9d801b9]: https://github.com/hiqdev/hidev/commit/9d801b9
[67fbd14]: https://github.com/hiqdev/hidev/commit/67fbd14
[4c5554e]: https://github.com/hiqdev/hidev/commit/4c5554e
[3101c68]: https://github.com/hiqdev/hidev/commit/3101c68
[006a0ab]: https://github.com/hiqdev/hidev/commit/006a0ab
[7675d1c]: https://github.com/hiqdev/hidev/commit/7675d1c
[ad8d8d0]: https://github.com/hiqdev/hidev/commit/ad8d8d0
[e4b5cd2]: https://github.com/hiqdev/hidev/commit/e4b5cd2
[04777ec]: https://github.com/hiqdev/hidev/commit/04777ec
[fbb973d]: https://github.com/hiqdev/hidev/commit/fbb973d
[45d1b47]: https://github.com/hiqdev/hidev/commit/45d1b47
[133dd20]: https://github.com/hiqdev/hidev/commit/133dd20
[9e41dae]: https://github.com/hiqdev/hidev/commit/9e41dae
[d41e819]: https://github.com/hiqdev/hidev/commit/d41e819
[ee2d1b9]: https://github.com/hiqdev/hidev/commit/ee2d1b9
[cb5f93c]: https://github.com/hiqdev/hidev/commit/cb5f93c
[883d418]: https://github.com/hiqdev/hidev/commit/883d418
[a9ea1aa]: https://github.com/hiqdev/hidev/commit/a9ea1aa
[87ec52f]: https://github.com/hiqdev/hidev/commit/87ec52f
[4292b81]: https://github.com/hiqdev/hidev/commit/4292b81
[696eea4]: https://github.com/hiqdev/hidev/commit/696eea4
[639c664]: https://github.com/hiqdev/hidev/commit/639c664
[671d39e]: https://github.com/hiqdev/hidev/commit/671d39e
[1b4772e]: https://github.com/hiqdev/hidev/commit/1b4772e
[368e810]: https://github.com/hiqdev/hidev/commit/368e810
[347befd]: https://github.com/hiqdev/hidev/commit/347befd
