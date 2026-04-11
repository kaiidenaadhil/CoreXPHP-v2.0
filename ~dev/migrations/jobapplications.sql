CREATE TABLE `jobapplications` (
`applicationId` INT  PRIMARY KEY NOT NULL AUTO_INCREMENT,
`jobId` INT  NOT NULL,
`fullName` VARCHAR(255)  NOT NULL,
`email` VARCHAR(255)  NOT NULL,
`phone` VARCHAR(255)  NOT NULL,
`resume` VARCHAR(255)  NOT NULL,
`coverLetter` VARCHAR(255)  NOT NULL,
`applicationStatus` ENUM('Pending', 'Reviewed', 'Shortlisted', 'Rejected', 'Hired')  NOT NULL,
`appliedAt` TIMESTAMP  NULL,
`jobapplicationCreatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP,
`jobapplicationUpdatedAt` TIMESTAMP  NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
`jobapplicationIdentify` VARCHAR(50)  NOT NULL,
FOREIGN KEY (`jobId`) REFERENCES `jobposts`(`jobId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;