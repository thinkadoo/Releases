## Data to XML or HTML Generator
This is a simple utility for generating XML or HTML files for each record in a DB Table (MySQL).

---

### Functions (output)


Generate HTML files with html.php

	Output to $htmllFolderLocation
	e.g. '../html/' - will create a folder named "html" at the same level as this project on the server.
	
### Database (input) set up the database in html.php and or xml.php

Creating an instance of the Database class sets up all the parameters at once.

	$databaseToArray = new DataBase( host , username, password, database_name, table_name, record_count);
	e.g. $databaseToArray = new DataBase('localhost', 'root', 'root', 'musicbrainz', 'mb_releases', 30000);

### Suggestions

Since this is a file generation project note the following:

- Do not deploy it to a production server environment.
- Turn your browser cache OFF.
- Clear Browser cache.


### License

  MIT LICENSE
 
  Permission is hereby granted, free of charge, to any person obtaining
  a copy of this software and associated documentation files (the
  "Software"), to deal in the Software without restriction, including
  without limitation the rights to use, copy, modify, merge, publish,
  distribute, sublicense, and/or sell copies of the Software, and to
  permit persons to whom the Software is furnished to do so, subject to
  the following conditions:
 
  The above copyright notice and this permission notice shall be
  included in all copies or substantial portions of the Software.
 
  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
  EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
  MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
  NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
  LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
  OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
  WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

