# Checkpoint 4T - July 2023

The project was set up with the console terminal command `symfony new my_project_directory --version="6.3.*" --webapp`.

## Technical requirements
- **install PHP 8.1**  **or higher** (https://www.php.net/downloads, https://www.php.net/manual/fr/install.php)
- **install Composer** (https://getcomposer.org/download/)

To check your versions, please enter: `php -v` and `composer -v`.
Also check your Symfony version: `symfony -v`. Make sure you run the CLI version which is recommended: it provides the tools to develop the application from local to remote.

###### Installing Webpack Encore:
Check your versions of nvm, node, npm and yarn : `nvm -v`, `node -v`, `nmp -v`, `yarn -v`. If missing, install them as follows:
1. **installing Nope and NPM**: check Active LTS version (https://github.com/nodejs/release#release-schedule) `nvm install <version>`
2. installing Yarn with NPM (https://classic.yarnpkg.com/en/docs/install/#windows-stable): `sh npm install --global yarn`

Then run `yarn install`.
Finally launch Webpack with `yarn watch` or `yarn dev-server`.

********************************************
## In a nutshell
Explained process below in "Setting up the project"
1. [x] `git clone`
2. [x] `composer install`
3. [x] create .env.local
4. [x] change credentials in DATABASE_URL="mysql://your_username:your_pwd@127.0.0.1:3306/database_name?serverVersion=8.0".
4. [x] `symfony console doctrine:database:create` or `symfony console d:d:c`
5. [x] `yarn install`
7. [x] `yarn add sass-loader@latest sass --dev`
8. [x] in **webpack.config.js** **.enableSassLoader** is active.
9. [x] `symfony server:start -d` or `symfony server:start -d`
10. [x] `yarn watch` or `yarn dev-server`.

********************************************

## **Setting up the project**
In your console terminal, use the following commands:

###### Fetching the project:
- **`git clone`**: it clones the project with its contents
- **`composer install`**: it installs the project's dependencies into vendor/

###### Customizing the project/database:
- create an **.env.local** file and copy-paste the content of the **.env** file.
- set it up: 
  - change the username, password and the name of the database in DATABASE_URL="mysql://**your_username**:**your_pwd**@127.0.0.1:3306/**database_name**?serverVersion=8.0";

###### Creating the database:
- `symfony console doctrine:database:create` or `symfony console d:d:c`

###### Running the project:
- `yarn install`.
- `yarn add sass-loader@latest sass --dev`.
- `symfony server:start` or `symfony server:start -d`.
- `yarn watch` or `yarn dev-server`.
