CREATE TABLE `workshopregistrations` (
`registrationId` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
`workshopId` INT  NOT NULL,
`fullName` VARCHAR(150)  NOT NULL,
`email` VARCHAR(150)  NOT NULL,
`phone` VARCHAR(50)  NOT NULL,
`ticketType` ENUM('Free', 'Standard', 'VIP')  NOT NULL,
`paymentStatus` ENUM('Pending', 'Paid', 'Cancelled')  NOT NULL,
`registeredAt` TIMESTAMP  NULL,
`workshopregistrationCreatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,
`workshopregistrationUpdatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`workshopregistrationIdentify` VARCHAR(50)  NOT NULL,
FOREIGN KEY (`workshopId`) REFERENCES `workshops`(`workshopId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;