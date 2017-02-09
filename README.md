# Gif Me Baby One More Time.

Yes, the name of this utility is a play on a Britney Spears song. No, I'm not sorry.   
![powered by giphy](./giphy.png)

Essentially what this tool does it download GIPHY data based on a search query and stores it in a JSON file.

#### Known Bugs
If you want data of more than 100 gifs, _which is the reason this tool was made in the first place_, the file will have multiple objects. It's not that hard to account for this in the tool that you'll be importing the data into, but it isn't the most elegant solution. I know of a way to concatenate the results in JS, but I'm still trying to figure out how to do it in PHP. Updates to follow soon, hopefully.


## Usage

Create a file named `data.json`, replace the variables in `app.php`, and you should be good to go.
Running it is as simple as `php app.php`, as php is preinstalled on Mac OS X and some linux distro's.
On windows you'll have to install it first.

### Disclaimer
This tool is made using the GIPHY API and uses the GIPHY Public API KEY. Using this tool, you have to adhere to the giphy rules and regulations.
