# carswebsite

1.	I created a simple CRUD application to add, update, delete cars from website.
2.	I used the following languages and frameworks to create this interface: PHP, MySQL, Javascript, JQuery, AJAX, Bootstrap and DataTables
3.	I followed the steps shown below to create an interface using MacBook Pro laptop
4.	To replicate the creation of the application, please clone the repository from my GitHub account at https://github.com/deepika537/carswebsite
5.	The following steps are recommended.
6.	Upload all PHP files to server. Following is the explanation of all the PHP files
    * Config.php=>It establishes the connection with the database using connection string variables.
    * Index.php=>It has references to all JavaScript and CSS libraries that are required to create the interface.
    * Cars.php=> It has all PHP functions to fetch and update MySql data.
    * Process.php=> It act as a template to call PHP functions based on action performed on the website.
    * Js/ajax.php=> It makes all Ajax calls to php functions and pass information from interface to database and send it back to interface.
    * epiz_26672605_cars.sql=> It contains all SQL queries to create and insert data into table.
    * Database name: epiz_26672605_cars
    * I created 2 tables. One table stores Carsdata and another stores Drivers data

Interface explanation as follows

1.	I created the interface using Datatables.
2.	There are 2 green buttons on the upper right corner. If we click on “Add Car” button we can add car. If we click on “Add Driver” then we can add driver to the car.

![ScreenShot1](/Images/ScreenShot1.jpg?raw=true "Optional Title")


3.	While adding the driver we need to enter “carID” so that the driver details will be associated with particular car.

![ScreenShot3](/Images/ScreenShot3.jpg?raw=true "Optional Title")

4.	Right now, we can associate one driver with one car.
5.	Click on blue color “view driver” button to view driver details for particular car
6.	Click on yellow color “update” button to update car details.

![ScreenShot4](/Images/ScreenShot4.jpg?raw=true "Optional Title")

7.	Click on red color “delete” button to delete particular car

![ScreenShot5](/Images/ScreenShot5.jpg?raw=true "Optional Title")

8.	Interface has global search in order to search and filter data from the table

![ScreenShot1](/Images/ScreenShot1.jpg?raw=true "Optional Title")

9.	We can sort table using each column by clicking on up and down arrows next to each column
10.	 Table has pagination to see next page data. 

![ScreenShot7](/Images/ScreenShot7.jpg?raw=true "Optional Title")

11.	 By default, the interface shows 10 rows. We can change that using dropdown on the top left corner of the page.

![ScreenShot6](/Images/ScreenShot6.jpg?raw=true "Optional Title")

12.	Each car has following properties: Make, Model, Year, Country, Color, Transmission, Plate#, State, Mileage.

![ScreenShot9](/Images/ScreenShot1.jpg?raw=true "Optional Title")

13.	Driver has the following properties: CarId, Name, Associatedriver, DriverStick(yes, no)

![ScreenShot10](/Images/ScreenShot1.jpg?raw=true "Optional Title")

14.	In the cars table and drivers table the first column(Id) is the primary key of the tables.

15. Database tables screenshot

![ScreenShot8](/Images/ScreenShot8.jpg?raw=true "Optional Title")



