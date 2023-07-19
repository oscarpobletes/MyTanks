# MyTanks 

MyTanks is a web-based aquarium management system designed to facilitate the management of fishes and their details in an aquarium. The system provides functionalities for adding new fishes, removing fishes, updating fish information, and querying fish details in the aquarium database. 

## Installation

1. Clone the MyTanks repository or download the ZIP file.
2. Place the files on your web server (e.g., Apache, Nginx) with PHP and PostgreSQL support.
3. Set up a PostgreSQL database with appropriate tables for fish, tanks, and species. You can take a look at the ER `diagram.jpg`
4. Configure the database connection in the PHP files with your PostgreSQL credentials.

## Usage

1. Access the `inicio.php` file in your web browser to start using MyTanks.
2. The main page allows you to select the type of operation you want to perform: "ALTAS" (Add), "BAJAS" (Remove), "CAMBIOS" (Update), or "CONSULTAS" (Query).
3. Depending on your selection, you will be redirected to the respective page (`alt_peces_1.php`, `bajas_peces_1.php`, `cambios_peces_1.php`, `consultas_peces_1.php`) to perform the desired operation.
4. Follow the on-screen instructions to manage your fish and their details.


