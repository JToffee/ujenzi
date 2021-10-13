
// contact US

CREATE TABLE contact_form_info (

    id  int not null AUTO_INCREMENT,
    name varchar (20),
    email varchar (30),
    message varchar (200),
    PRIMARY KEY(id)
)
//user
DROP IF EXISTS  'user';
CREATE TABLE 'user' (
	Userid INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (20),
    lastname VARCHAR (20),
    dateofbirth DATE,
    nat_id INT (8),
    proffesion VARCHAR (20),
    town VARCHAR (20),
    email VARCHAR (30),
    mobileno INT (10),
    pwd VARCHAR (20),
    role VARCHAR (20),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
// Workers
CREATE TABLE worker (

	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fname varchar(20),
    lname varchar(20),
    dob date,
    natID int(8),
    gcNo varchar(10),
    country varchar(10),
    county varchar (10),
    town varchar (10),
    prof varchar(20),
    ncaNo int(8),
    email varchar(30),
    phone int (10),
    pwd varchar (20)

    )

  //login



  CREATE TABLE login_activity (

      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      firstname Varchar (20 ),
      lastname varchar (20),
      email varchar (30),
      login_date timestamp DEFAULT CURRENT_TIMESTAMP
  );

DROP TABLE IF EXISTS 'login';
CREATE TABLE login (
    username varchar(20),
    password varchar(20),
    role ENUM
);
CREATE TABLE job (
    JobID INT AUTO_INCREMENT  PRIMARY KEY,
  	category VARCHAR(40),
    desrciption VARCHAR(500),
    location VARCHAR (400),
    payment INT(20),
    email varchar(30)

)
CREATE TABLE applications (
    AppId INT AUTO_INCREMENT  PRIMARY KEY,
    JobID INT,
    workeremail varchar(30),
    clientemail varchar(30)

)
CREATE TABLE confirmedjob (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    JobID INT ,
    workeremail VARCHAR(30),
    clientemail VARCHAR (30)
    )
    CREATE TABLE jobtaken_done (
        ID INT AUTO_INCREMENT PRIMARY KEY,
        JobID INT ,
        workeremail VARCHAR(30),
        clientemail VARCHAR (30),
        datedone timestamp DEFAULT CURRENT_TIMESTAMP
        )
        CREATE TABLE jobconfirmed_done (
            ID INT AUTO_INCREMENT PRIMARY KEY,
            JobID INT ,
            workeremail VARCHAR(30),
            clientemail VARCHAR (30),
            datedone timestamp DEFAULT CURRENT_TIMESTAMP
            )
