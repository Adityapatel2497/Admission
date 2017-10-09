            CREATE TABLE student_data(
                ID INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                FULLNAME VARCHAR(70),
                GENDER VARCHAR(8),
                BGROUP VARCHAR(10),
                ADDRESS VARCHAR(100),
                CITY VARCHAR(20),
                STATE VARCHAR(50),
                ZIP VARCHAR(10),
                PNUMBER VARCHAR(11),
                EMAIL VARCHAR(60),
                PASSWORD VARCHAR(100),
                register_date datetime,
                UNIQUE(EMAIL)
            )

                CREATE TABLE education_information(
                    E_ID INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    ID INT(3) NOT NULL REFERENCES student_data(ID) ,
                    ssc_board VARCHAR(70) NOT NULL,
                    ssc_school VARCHAR(70) NOT NULL,
                    ssc_per VARCHAR(3) NOT NULL,
                    ssc_year VARCHAR(5) NOT NULL,
                    ssc_attempt VARCHAR(7) NOT NULL,
                    
                    hsc_board VARCHAR(70) NOT NULL,
                    hsc_school VARCHAR(70) NOT NULL,
                    hsc_per VARCHAR(3) NOT NULL,
                    hsc_year VARCHAR(5) NOT NULL,
                    hsc_attempt VARCHAR(7) NOT NULL,

                    grad_deg VARCHAR(70),
                    grad_board VARCHAR(70),
                    grad_school VARCHAR(70),
                    grad_per VARCHAR(3),
                    grad_year VARCHAR(5),
                    grad_attempt VARCHAR(7),

                    pgrad_deg VARCHAR(70),
                    pgrad_board VARCHAR(70),
                    pgrad_school VARCHAR(70),
                    pgrad_per VARCHAR(3),
                    pgrad_year VARCHAR(5),
                    pgrad_attempt VARCHAR(7)
                )

            CREATE TABLE courses(
                ID INT(2) PRIMARY KEY AUTO_INCREMENT,
                coursename VARCHAR(20) UNIQUE
            )