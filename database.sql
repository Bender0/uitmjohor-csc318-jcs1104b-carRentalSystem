CREATE TABLE IF NOT EXISTS `carRent` (
  `ID` int(11) NOT NULL,
  `dateTimeStart` datetime() NOT NULL,
  `dateTimeEnd` datetime() NOT NULL,
  `carType` int(1) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `Surname` varchar(150) NOT NULL,
  `PhoneNumber` varchar(150) NOT NULL,
  `Email` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ;
