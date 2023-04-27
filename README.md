To download this repo:
1. Clone it `git clone {repo ssh}`
2. Make sure you have phpunit installed locally composer require --dev phpunit/phpunit ^10
3. Download the dependencies `npm install`

To run the tests:
`npm test` 
(This works because I set up a script in the package.json to run a script, if you add any more tests it will need to be amended)

NB:
If there are any files you don't want added to github put them in the `.gitignore` file
