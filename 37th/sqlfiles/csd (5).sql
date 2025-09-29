-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 07:57 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csd`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib_divisions`
--

CREATE TABLE IF NOT EXISTS `lib_divisions` (
  `id_division` int(11) NOT NULL,
  `division_name` varchar(70) NOT NULL,
  `division_abbr` varchar(50) DEFAULT NULL,
  `division_sector` int(11) DEFAULT NULL,
  `division_isactive` tinyint(1) NOT NULL DEFAULT '0',
  `for_staffing` tinyint(1) NOT NULL DEFAULT '1',
  `for_plantilla` tinyint(1) NOT NULL DEFAULT '0',
  `division_issatellite` tinyint(1) NOT NULL DEFAULT '0',
  `satellite_station` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_divisions`
--

INSERT INTO `lib_divisions` (`id_division`, `division_name`, `division_abbr`, `division_sector`, `division_isactive`, `for_staffing`, `for_plantilla`, `division_issatellite`, `satellite_station`) VALUES
(11035, 'Administrative Support Division', 'Admin', 11015, 1, 1, 1, 0, NULL),
(11038, 'Plant Breeding and Biotechnology Division', 'PBBD', 11031, 1, 1, 1, 0, NULL),
(11039, 'Agronomy, Soils, and Plant Physiology Division', 'ASPPD', 11031, 1, 1, 1, 0, NULL),
(11040, 'Crop Protection Division', 'CPD', 11031, 1, 1, 1, 0, NULL),
(11041, 'Rice Engineering and Mechanization Division', 'REMD', 11031, 1, 1, 1, 0, NULL),
(11042, 'Socioeconomics Division', 'SED', 11031, 1, 1, 1, 0, NULL),
(11043, 'Technology Management and Services Division', 'TMSD', 11032, 1, 1, 1, 0, NULL),
(11044, 'Development Communication Division', 'DevCom', 11032, 1, 1, 1, 0, NULL),
(11077, 'Physical Plant Division', 'PPD', 11015, 1, 1, 1, 0, NULL),
(11085, 'Genetic Resources Division', 'GRD', 11031, 1, 1, 1, 0, NULL),
(11091, 'Rice Chemistry and Food Science Division', 'RCFSD', 11031, 1, 1, 1, 0, NULL),
(11102, 'Corporate Services Division', 'CSD', 11014, 1, 1, 1, 0, NULL),
(11103, 'Information Systems Division', 'ISD', 11014, 1, 1, 1, 0, NULL),
(11106, 'Financial and Management Division', 'FMD', 11015, 1, 1, 1, 0, NULL),
(11107, 'Business Development Division', 'BDD', 11015, 1, 1, 1, 0, NULL),
(11108, 'Research Division', 'Res Div', NULL, 1, 1, 1, 0, NULL),
(11109, 'Development Division', 'Dev Div.', NULL, 1, 1, 1, 0, NULL),
(11110, 'CMU Satellite Station', 'CMU Sat St', NULL, 1, 0, 1, 1, NULL),
(11114, 'Procurement Management Division', 'PMD', 11015, 1, 1, 1, 0, NULL),
(11119, 'Commission on Audit', 'COA', NULL, 1, 1, 0, 0, NULL),
(11122, 'Planning  Division - RCEF-PMO', 'PD-RCEF', 11034, 1, 1, 1, 0, NULL),
(11123, 'Field Operations and Monitoring Division - RCEF-PMO', 'FOD-RCEF', 11034, 1, 1, 1, 0, NULL),
(11124, 'Support Services Division - RCEF-PMO', 'SSD-RCEF', 11034, 1, 1, 1, 0, NULL),
(11125, 'Zamboanga Satellite Station', NULL, 11035, 1, 1, 1, 1, NULL),
(11126, 'Samar Satellite Station', NULL, 11035, 1, 1, 1, 1, NULL),
(11127, 'Mindoro Satellite Station', NULL, 11035, 1, 1, 1, 1, NULL),
(11128, 'RCEF-PMO Unit', 'RCEF-PMO', 11035, 1, 1, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_offices`
--

CREATE TABLE IF NOT EXISTS `lib_offices` (
  `id_office` int(11) NOT NULL,
  `office_name` varchar(100) NOT NULL,
  `office_abbr` varchar(10) DEFAULT NULL,
  `office_order` tinyint(1) DEFAULT NULL,
  `for_staffing` tinyint(1) NOT NULL DEFAULT '1',
  `for_plantilla` tinyint(1) NOT NULL DEFAULT '1',
  `plantilla_order` tinyint(2) DEFAULT NULL,
  `payroll_projectcode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11038 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_offices`
--

INSERT INTO `lib_offices` (`id_office`, `office_name`, `office_abbr`, `office_order`, `for_staffing`, `for_plantilla`, `plantilla_order`, `payroll_projectcode`) VALUES
(11013, 'Board of Trustees (Central)', 'BOT', 11, 1, 1, 1, NULL),
(11014, 'Office of the Executive Director', 'OED', 1, 1, 1, 3, NULL),
(11015, 'Office of the Deputy Executive Director for Administrative Services and Finance', 'ODEDASF', 2, 1, 1, 6, NULL),
(11017, 'Admin (Station)', 'Admin', 8, 1, 0, NULL, NULL),
(11026, 'Research & Development (Station)', 'R&D', 7, 1, 0, NULL, NULL),
(11031, 'Office of the Deputy Executive Director for Research', 'ODEDR', 3, 1, 1, 4, NULL),
(11032, 'Office of the Deputy Executive Director for Development', 'ODEDD', 4, 1, 1, 5, NULL),
(11033, 'BDD (Station)', 'BDD', 9, 1, 0, NULL, NULL),
(11034, 'RCEF-Program Management Office', 'RCEF-PMO', 5, 1, 1, 7, NULL),
(11036, 'Internal Audit Unit', 'IAU', 12, 0, 1, 2, NULL),
(11037, 'Golden Rice Program Management Office', 'GR-PMO', 6, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_positions`
--

CREATE TABLE IF NOT EXISTS `lib_positions` (
  `id_position` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL,
  `position_abbr` varchar(50) DEFAULT NULL,
  `salary_grade_id` int(11) DEFAULT NULL,
  `position_is_philrice` tinyint(1) NOT NULL DEFAULT '0',
  `position_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `position_oldlink` int(11) DEFAULT NULL,
  `position_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16318 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_positions`
--

INSERT INTO `lib_positions` (`id_position`, `position_name`, `position_abbr`, `salary_grade_id`, `position_is_philrice`, `position_is_active`, `position_oldlink`, `position_remarks`) VALUES
(15007, 'Science Research Analyst', 'SR Analyst', 11, 1, 1, NULL, NULL),
(15025, 'Engineer I', 'Engineer I', 12, 1, 1, NULL, NULL),
(15076, 'Data Controller', 'Data Controller', 11, 1, 1, NULL, NULL),
(15123, 'Laborer I', 'Laborer I', 1, 1, 1, NULL, NULL),
(15153, 'Administrative Assistant II', 'AA II', 8, 1, 1, NULL, NULL),
(15158, 'Utility Worker I', 'Utility Worker I', 1, 1, 1, NULL, NULL),
(15160, 'Laboratory Technician I', 'Lab Techn', 4, 1, 1, NULL, NULL),
(15164, 'Watchman II', 'Watchman II', 4, 1, 1, NULL, NULL),
(15169, 'Supervising Information Officer II', 'Supervising Information O', 6, 1, 1, NULL, NULL),
(15178, 'Director I', 'Director I', 25, 1, 1, NULL, NULL),
(15296, 'Computer Operator I', 'Comp Oper', 7, 1, 1, NULL, NULL),
(15350, 'Computer Technician', 'computer tech', 6, 1, 1, NULL, NULL),
(15394, 'Field Technician', 'Field Tech''n', 4, 1, 1, NULL, NULL),
(15520, 'Supply Assistant', 'Supply Assistant', 8, 1, 1, NULL, NULL),
(15526, 'Planning Officer III', 'Planning Off III', 18, 1, 1, NULL, NULL),
(15542, 'Shop Technician', 'Shop Tech''n', 6, 1, 1, NULL, NULL),
(15551, 'Human Resource Management Assistant', 'HRM Assistant', 8, 1, 1, NULL, NULL),
(15572, 'Laborer II', 'Laborer II', 3, 1, 1, NULL, NULL),
(15574, 'Driver I', 'Driver I', 3, 1, 1, NULL, NULL),
(15576, 'Utility Worker II', 'Utility Worker II', 3, 1, 1, NULL, NULL),
(15579, 'Driver II', 'Driver II', 4, 1, 1, NULL, NULL),
(15582, 'Science Aide', 'Science Aide', 4, 1, 1, NULL, NULL),
(15585, 'Clerk II', 'Clerk II', 4, 1, 1, NULL, NULL),
(15588, 'Mechanic I', 'Mechanic I', 4, 1, 1, NULL, NULL),
(15597, 'Mechanic II', 'Mechanic II', 6, 1, 1, NULL, NULL),
(15599, 'Clerk III', 'Clerk III', 6, 1, 1, NULL, NULL),
(15605, 'Accounting Clerk II', 'Accounting Clerk II', 6, 1, 1, NULL, NULL),
(15611, 'Accounting Clerk III', 'Accounting Clerk III', 8, 1, 1, NULL, NULL),
(15614, 'Draftsman II', 'Draftsman II', 8, 1, 1, NULL, NULL),
(15618, 'Cash Clerk III', 'Cash Clerk III', 8, 1, 1, NULL, NULL),
(15619, 'Planning Assistant', 'Planning Assistant', 8, 1, 1, NULL, NULL),
(15623, 'Administrative Assistant I', 'AA', 7, 1, 1, NULL, NULL),
(15635, 'Mechanic III', 'Mechanic III', 9, 1, 1, NULL, NULL),
(15638, 'Computer Operator II', 'Computer Operator II', 9, 1, 1, NULL, NULL),
(15639, 'Science Research Assistant', 'Sci Res Asst', 9, 1, 1, NULL, NULL),
(15652, 'Science Research Analyst', 'SR Analyst', 11, 1, 1, NULL, NULL),
(15653, 'Accountant I', 'Accountant I', 12, 1, 1, NULL, NULL),
(15661, 'Farm Superintendent I', 'FS I', 11, 1, 1, NULL, NULL),
(15667, 'Information Systems Analyst II', 'ISA II', 16, 1, 1, NULL, NULL),
(15670, 'Architect I', 'Architect I', 12, 1, 1, NULL, NULL),
(15672, 'Science Research Specialist I', 'SRS I', 13, 1, 1, NULL, NULL),
(15679, 'Executive Assistant I', 'EA I', 14, 1, 1, NULL, NULL),
(15686, 'Agriculturist II', 'Agriculturist II', 15, 1, 1, NULL, NULL),
(15689, 'Planning Officer II', 'Planning Off II', 15, 1, 1, NULL, NULL),
(15690, 'Dormitory Manager III', 'Dorm. Mngr III', 15, 1, 1, NULL, NULL),
(15693, 'Administrative Officer II', 'AO II', 11, 1, 1, NULL, NULL),
(15697, 'Accountant II', 'Accountant II', 16, 1, 1, NULL, NULL),
(15706, 'Science Research Specialist II', 'SRS II', 16, 1, 1, NULL, NULL),
(15708, 'Architect II', 'Architect II', 16, 1, 1, NULL, NULL),
(15709, 'Engineer II', 'Engineer II', 16, 1, 1, NULL, NULL),
(15710, 'Executive Assistant II', 'EA II', 17, 1, 1, NULL, NULL),
(15719, 'Accountant III', 'Accountant III', 19, 1, 1, NULL, NULL),
(15721, 'Administrative Officer III', 'AO III', 14, 1, 1, NULL, NULL),
(15722, 'Development Management Officer III', 'Dev Mngt Off III', 18, 1, 1, NULL, NULL),
(15725, 'Senior Science Research Specialist', 'Sr SRS', 19, 1, 1, NULL, NULL),
(15726, 'Information Technology Officer I', 'IT Officer I', 19, 1, 1, NULL, NULL),
(15729, 'Executive Assistant III', 'Exec Asst III', 20, 1, 1, NULL, NULL),
(15738, 'Administrative Officer IV', 'AO IV', 15, 1, 1, NULL, NULL),
(15743, 'Information Technology Officer II', 'IT Officer II', 22, 1, 1, NULL, NULL),
(15746, 'Supervising Science Research Specialist', 'Supervising SRS', 22, 1, 1, NULL, NULL),
(15747, 'Information Technology Officer III', 'IT Officer III', 24, 1, 1, NULL, NULL),
(15749, 'Chief Science Research Specialist', 'Chief SRS', 24, 1, 1, NULL, NULL),
(15751, 'Administrative Officer V', 'AO V', 18, 1, 1, NULL, NULL),
(15760, 'Chief Science Research Specialist/Scientist I', 'Chief SRS/Scient', 26, 1, 1, NULL, NULL),
(15769, 'Planning Assistant II', 'PA II', 10, 1, 1, NULL, NULL),
(15771, 'Internal Auditing Assistant', '', 8, 1, 1, NULL, NULL),
(15773, 'Farm Worker II', 'FW II', 4, 1, 1, NULL, NULL),
(15777, 'Internal Auditor II', 'Internal Auditor II', 15, 1, 1, NULL, NULL),
(15779, 'Administrative Aide V', 'Aide V', 5, 1, 1, NULL, NULL),
(15781, 'Administrative Assistant V', 'AA V', 11, 1, 1, NULL, NULL),
(15787, 'Administrative Assistant III', 'AA III', 9, 1, 1, NULL, NULL),
(15793, 'Warehouseman II', 'Warehouseman II', 8, 1, 1, NULL, NULL),
(15795, 'Internal Auditor I', 'IA I', 11, 1, 1, NULL, NULL),
(15801, 'Information Systems Researcher II', 'ISR II', 14, 1, 1, NULL, NULL),
(15802, 'Computer Programmer I', 'ComProg I', 11, 1, 1, NULL, NULL),
(15803, 'Computer Maintenance Technologist I', 'Computer Maintenance Technologist I', 11, 1, 1, NULL, NULL),
(15808, 'Legal Assistant II', 'Legal Assistant II', 12, 1, 1, NULL, NULL),
(15809, 'Administrative Assistant IV', 'AA IV', 10, 1, 1, NULL, NULL),
(15812, 'Property Officer I', 'Property Officer I', 10, 1, 1, NULL, NULL),
(15818, 'Recreation and Sports Development Assistant', 'Recreation and Sports Development Assistant', 4, 1, 1, NULL, NULL),
(15819, 'Financial Analyst I', 'FA I', 11, 1, 1, NULL, NULL),
(15820, 'Cash Clerk II', 'cash clerk II', 6, 1, 1, NULL, NULL),
(15821, 'Budget Clerk III', 'Budget clerk III', 8, 1, 1, NULL, NULL),
(15822, 'Budget clerk II', 'Budget clerk II', 6, 1, 1, NULL, NULL),
(15823, 'Draftsman IV', 'Draftsman IV', 14, 1, 1, NULL, NULL),
(15824, 'Mechanical Plant Operator III', 'Mechanical Plant Operator III', 9, 1, 1, NULL, NULL),
(15825, 'Aircon Technician II', 'Aircon Technician II', 8, 1, 1, NULL, NULL),
(15826, 'Utility Foreman', 'UF', 6, 1, 1, NULL, NULL),
(15828, 'Dispatcher', 'Dispatcher', 8, 1, 1, NULL, NULL),
(15829, 'Automotive Aircon Technician II', 'Automotive Aircon Technician II', 8, 1, 1, NULL, NULL),
(15830, 'Driver III', 'driver III', 8, 1, 1, NULL, NULL),
(15838, 'Environmental Management Specialist II', 'Environmental Management Specialist II', 15, 1, 1, NULL, NULL),
(15839, 'Health and Safety Officer', 'Health and Safety Officer', 13, 1, 1, NULL, NULL),
(15905, 'Information Systems Researcher III', 'ISR III', 17, 1, 1, NULL, NULL),
(15913, 'Supervising Science Research Specialist/Scientist I', 'Sup SRS/Scientist I', 26, 1, 1, NULL, NULL),
(15973, 'Administrative Aide IV', 'Admin Aide IV', 4, 1, 1, NULL, NULL),
(15979, 'Planning Officer I', 'PO I', 11, 1, 1, NULL, NULL),
(15985, 'Administrative Officer I', 'AO I', 10, 1, 1, NULL, NULL),
(15987, 'Senior Science Research Specialist/Scientist I', 'Sr SRS/Scientist I', 26, 1, 1, NULL, NULL),
(15997, 'Sales Representative I', 'Sales Rep I', 6, 1, 1, NULL, NULL),
(16000, 'Electronics and Communications Equipment Technician III', 'ECET III', 11, 1, 1, NULL, NULL),
(16001, 'Administrative Assistant VI', 'AA VI', 12, 1, 1, NULL, NULL),
(16002, 'Chief Science Research Specialist/Scientist II', 'Chief SRS/ Scientist II', 27, 1, 1, NULL, NULL),
(16003, 'Audio Visual Aids Technician II', 'AVAT II', 8, 1, 1, NULL, NULL),
(16004, 'Public Relations Officer I', 'PRO I', 11, 1, 1, NULL, NULL),
(16005, 'Artist Illustrator III', 'AI III', 11, 1, 1, NULL, NULL),
(16044, 'Legal Researcher III', 'LR III', 18, 1, 1, NULL, NULL),
(16049, 'Science Research Analyst', 'sranalyst', 11, 1, 1, NULL, NULL),
(16066, 'Draftsman III', 'Drafts', 11, 1, 1, NULL, NULL),
(16068, 'Utility Worker II (Aircon Technician)', 'Technician', 3, 1, 1, NULL, NULL),
(16069, 'Administrative Aide IV (Messenger)', 'Messenger', 4, 1, 1, NULL, NULL),
(16070, 'Administrative Aide IV (Printing Machine Operator I)', 'Printing', 4, 1, 1, NULL, NULL),
(16071, 'Administrative Assistant III (Dispatcher)', 'Dispatcher', 8, 1, 1, NULL, NULL),
(16072, 'Administrative Assistant III (Liaison Officer)', 'Liason', 9, 1, 1, NULL, NULL),
(16073, 'Administrative Assistant III (Planning Assistant)', 'PA', 9, 1, 1, NULL, NULL),
(16075, 'Carpenter Foreman', 'Foreman', 8, 1, 1, NULL, NULL),
(16076, 'Clerk III (Buyer/Canvasser)', 'Canvasser', 6, 1, 1, NULL, NULL),
(16077, 'Clerk III (Property Clerk)', 'Property', 6, 1, 1, NULL, NULL),
(16078, 'Clerk III (Warehouse Clerk)', 'Warehouse', 6, 1, 1, NULL, NULL),
(16079, 'Dormitory Attendant', 'Dorm', 3, 1, 1, NULL, NULL),
(16080, 'Clerk III (Project Assistant)', 'Clerk', 6, 1, 1, NULL, NULL),
(16081, 'Recreation and Sports Development Assistant (Tennis Instructor)', 'RSDA', 4, 1, 1, NULL, NULL),
(16082, 'Recreation and Sports  Development Assistant (Zumba Instructor)', 'RSDA', 4, 1, 1, NULL, NULL),
(16083, 'Science Research Specialist I (Communication Specialist)', 'SRS', 13, 1, 1, NULL, NULL),
(16084, 'Science Research Specialist II (Agribusiness Specialist)', 'SRS', 16, 1, 1, NULL, NULL),
(16085, 'Senior Administrative Assistant I', 'SAA I', 13, 1, 1, NULL, NULL),
(16086, 'Shop Technician I', 'ST I', 4, 1, 1, NULL, NULL),
(16087, 'Utility Foreman (Mason/Carpenter)', 'Mason', 6, 1, 1, NULL, NULL),
(16088, 'Utility Foreman (Painter)', 'Painter', 6, 1, 1, NULL, NULL),
(16089, 'Utility Foreman (Plumber)', 'Plumber', 6, 1, 1, NULL, NULL),
(16090, 'Utility Foreman (Plumber/Electrician)', 'Electrician', 6, 1, 1, NULL, NULL),
(16091, 'Utility Worker (Warehouseman I)', 'Warehouseman', 6, 1, 1, NULL, NULL),
(16092, 'Administrative Aide IV ', 'AA IV', 6, 1, 1, NULL, NULL),
(16102, 'Agriculturist II', '', 15, 1, 1, NULL, NULL),
(16103, 'Administrative Aide IV (Day Care Teacher)', 'AA IV', 6, 1, 1, NULL, NULL),
(16104, 'Legal Assistant II', 'LA', 12, 1, 1, NULL, NULL),
(16105, 'Mechanic II (Agri. Technician)', '', 6, 1, 1, NULL, NULL),
(16106, 'Warehouseman IV', '', 13, 1, 1, NULL, NULL),
(16107, 'Research Assistant', '', 8, 1, 1, NULL, NULL),
(16110, 'Research Assistant', '', 9, 1, 1, NULL, NULL),
(16111, 'Research Assistant', '', 9, 1, 1, NULL, NULL),
(16127, 'Shop Technician II', 'ST II', 6, 1, 1, NULL, NULL),
(16128, 'Information Systems Analyst I', 'ISA I', 12, 1, 1, NULL, NULL),
(16131, 'Project Officer', 'PO', 11, 1, 1, NULL, NULL),
(16132, 'Senior Environment Management Specialist', '', 18, 1, 1, NULL, NULL),
(16133, 'Laboratory Aide II', 'LA II', 4, 1, 1, NULL, NULL),
(16134, 'Safety Officer', 'SO', 13, 1, 1, NULL, NULL),
(16139, 'Research Assistant', 'RA', 9, 1, 1, NULL, NULL),
(16140, 'Chief Science Research Specialist/ Scientist I', 'CSRSSI', 27, 1, 1, NULL, NULL),
(16141, 'Document Control Officer', 'DCO', 11, 1, 1, NULL, NULL),
(16144, 'Warehouse Inspector', 'WHI', 7, 1, 1, NULL, NULL),
(16145, 'Director I', 'D1', 28, 1, 1, NULL, NULL),
(16146, 'Dormitory Attendant', 'Dorm', 4, 1, 1, NULL, NULL),
(16155, 'Budget and Management Specialist I', 'BMS', 13, 1, 1, NULL, NULL),
(16156, 'Project Development Officer II', 'PDO II', 15, 1, 1, NULL, NULL),
(16168, 'Computer Programmer II', 'CP II', 15, 1, 1, NULL, NULL),
(16171, 'Procurement Management Officer II', 'PMO II', 13, 1, 1, NULL, NULL),
(16175, 'Senior Administrative Assistant III', 'Senior AA III', 15, 1, 1, NULL, NULL),
(16177, 'Chief Science Research Specialist ', 'Chief SRS', 30, 1, 1, NULL, NULL),
(16179, 'Computer Programmer III', 'Com Prog III', 18, 1, 1, NULL, NULL),
(16180, 'Personnel Specialist I', 'PS I', 13, 1, 1, NULL, NULL),
(16182, 'Farm Superintendent II', 'FS II', 15, 1, 1, NULL, NULL),
(16183, 'LIBRARIAN III', 'LIBRARIAN III', 18, 1, 1, NULL, NULL),
(16184, 'Laboratory Technician 1', 'Lab Technician', 6, 1, 1, NULL, NULL),
(16185, 'Administrative Officer III (Cashier II)', 'AO III (Cashier II)', 14, 1, 1, NULL, NULL),
(16186, 'Watchman III', '', 7, 1, 1, NULL, NULL),
(16187, 'Supervising Science Research Specialist', 'SSRS 1', 19, 1, 1, NULL, NULL),
(16188, 'Development Management Officer V', '', 24, 1, 1, NULL, NULL),
(16194, 'Shop Technician III', '', 9, 1, 1, NULL, NULL),
(16202, 'Administrative Aide V (Chauffeur I)', 'Chauffeur I', 5, 1, 1, NULL, NULL),
(16207, 'Science Research Technician II', '', 11, 1, 1, NULL, NULL),
(16211, 'Engineering Assistant', '', 8, 1, 1, NULL, NULL),
(16212, 'Electrical Inspector II', '', 8, 1, 1, NULL, NULL),
(16215, 'Admin Aide (Driver)', 'Admin Aide (Driver)', 5, 1, 1, NULL, NULL),
(16224, 'Administrative Aide II', 'Aide II', 2, 1, 1, NULL, NULL),
(16227, 'Deputy Executive Director IV', 'DEDIV', 30, 1, 1, NULL, NULL),
(16230, 'Project Officer V', 'POV', 24, 1, 1, NULL, NULL),
(16248, 'Chief Science Research Specialist/Scientist III', 'CSRS/SIII', 28, 1, 1, NULL, NULL),
(16249, 'Procurement Management Officer I', 'PMO I', 11, 1, 1, NULL, NULL),
(16264, 'Administrative Aide I', 'Aide I', 1, 1, 1, NULL, NULL),
(16278, 'Supervising Science Research Specialist', 'SCRS25', 25, 1, 1, NULL, NULL),
(16301, 'Senior Administrative Assistant IV', 'Sr AA IV', 16, 1, 1, NULL, NULL),
(16302, 'Administrative Aide VI', 'Aide VI', 6, 1, 1, NULL, NULL),
(16303, 'Information Systems Analyst III', 'ISA III', 19, 1, 1, NULL, NULL),
(16306, 'Director II', 'Director II', 26, 1, 1, NULL, NULL),
(16307, 'Chief Science Research Specialist/Scientist I', 'Chief SRS/SI', 27, 1, 1, NULL, NULL),
(16308, 'Senior Administrative Assistant II', 'SAA II', 14, 1, 1, NULL, NULL),
(16311, 'Administrative Aide VI (Day Care Teacher)', '', 6, 1, 1, NULL, NULL),
(16312, 'Senior Remote Sensing Technologist', '', 18, 1, 1, NULL, NULL),
(16316, 'Chief Science Research Specialist/Scientist II', 'Chief SRS/Scientist II', 28, 1, 1, NULL, NULL),
(16317, 'Computer Operator IV', '', 14, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lib_stations`
--

CREATE TABLE IF NOT EXISTS `lib_stations` (
  `id_station` int(11) NOT NULL,
  `station_name` varchar(70) NOT NULL,
  `station_abbr` varchar(10) DEFAULT NULL,
  `station_ismain` tinyint(1) NOT NULL DEFAULT '0',
  `station_issatellite` tinyint(1) NOT NULL DEFAULT '0',
  `station_deputy` int(11) DEFAULT NULL,
  `station_address` varchar(200) DEFAULT NULL,
  `station_city` int(11) DEFAULT NULL,
  `station_province` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11017 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_stations`
--

INSERT INTO `lib_stations` (`id_station`, `station_name`, `station_abbr`, `station_ismain`, `station_issatellite`, `station_deputy`, `station_address`, `station_city`, `station_province`) VALUES
(11005, 'Central Experiment Station', 'CES', 1, 0, 11014, 'Science City of Muñoz, Nueva Ecija', 1051, 12),
(11006, 'Midsayap', 'MES', 0, 0, 11015, 'Bual Norte, Midsayap, North Cotabato', 359, 62),
(11007, 'Los Baños', 'LBS', 0, 0, 11032, 'UPLB Campus, Los Baños, Laguna', 947, 19),
(11008, 'Agusan', 'AES', 0, 0, 11015, 'Basilisa, RTRomualdez, Agusan Del Norte', 963, 67),
(11009, 'Batac', 'BES', 0, 0, 11031, 'Batac City, Ilocos Norte', 827, 1),
(11010, 'Isabela', 'CVES', 0, 0, 11031, 'San Mateo, Isabela', 1388, 7),
(11011, 'Negros', 'PRN', 0, 0, 11032, 'Murcia, Negros Occidental', 1340, 37),
(11012, 'Bicol', 'BiES', 0, 0, 11032, 'Batang, Ligao City, Albay', 1265, 27),
(11013, 'CMU Satellite Station', 'CMU', 0, 1, 11015, 'Maramag, Bukidnon', 1314, 53),
(11014, 'Zamboanga Satellite Station', 'ZSS', 0, 1, 11015, NULL, NULL, NULL),
(11015, 'Samar Satellite Station', 'SSS', 0, 1, 11015, 'UEP Campus, Catarman, Northern Samar', 227, 45),
(11016, 'Mindoro Satellite Station', 'MSS', 0, 1, 11032, 'Alacaak, Sta. Cruz, Occidental Mindoro', 407, 23);

-- --------------------------------------------------------

--
-- Table structure for table `lib_units`
--

CREATE TABLE IF NOT EXISTS `lib_units` (
  `id_unit` int(11) NOT NULL,
  `unit_name` varchar(70) NOT NULL,
  `unit_abbr` varchar(10) DEFAULT NULL,
  `unit_isactive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11147 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_units`
--

INSERT INTO `lib_units` (`id_unit`, `unit_name`, `unit_abbr`, `unit_isactive`) VALUES
(11102, 'Human Resource Management Office', 'HRMO', 1),
(11135, 'Community Relations Office', 'ComRel', 1),
(11136, 'Records', 'Records', 1),
(11139, 'Library', 'Lib', 1),
(11140, 'Internal Audit Unit', 'IAU', 1),
(11142, 'Legal Office', 'Legal', 1),
(11143, 'Crop Biotechnology Center', 'CBC', 1),
(11144, 'Integrated Management System and Services Office', 'IMSSO', 1),
(11146, 'Property and Supply Management Unit', 'PSMU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL,
  `transaction` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `transaction`, `username`, `remarks`, `date_create`) VALUES
(1, '0', '0', '0', '2023-09-04 05:32:34'),
(2, 'Presenter Send Mail', '', 'this mail sent toirincomanuel@gmail.com.', '2023-09-04 05:33:35'),
(3, 'Presenter Send Mail', '', 'this mail sent to irincomanuel@gmail.com.', '2023-09-04 05:40:03'),
(4, 'Presenter Send Mail', '', 'this mail sent to irincomanuel@gmail.com.', '2023-09-04 05:40:58'),
(5, 'Presenter Send Mail', '', 'this mail sent to irincomanuel@gmail.com.', '2023-09-04 05:44:05'),
(6, 'Presenter Send Mail', '', 'this mail sent to irincomanuel@gmail.com.', '2023-09-04 05:52:24'),
(7, 'Presenter Send Mail', '', 'this mail sent to irincomanuel@gmail.com.', '2023-09-04 05:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL,
  `sync_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `name`, `display_name`, `description`, `created_at`, `updated_at`, `isDeleted`, `sync_date`) VALUES
(1, 'administrator', 'Coordinator', 'Coordinators of the system', '2018-08-14 19:43:26', '2018-08-14 19:43:26', 0, '2022-06-08 03:12:35'),
(2, 'sdms-data-manager', 'SDMS Data Manager', 'User that manages the data collected from the data collection tool', '2018-08-14 19:43:26', '2018-08-23 23:10:18', 0, '2022-06-08 03:12:35'),
(3, 'seed-grower', 'Seed Grower', 'User that views the feedbacks from the interested buyers', '2018-08-16 18:59:34', '2018-08-19 17:22:20', 0, '2022-06-08 03:12:35'),
(4, 'warehouse-manager', 'Warehouse Manager', 'User that has access to Warehouse Management System', '2018-08-23 19:04:47', '2018-08-23 19:04:47', 0, '2022-06-08 03:12:35'),
(5, 'farm-manager', 'Farm Manager', 'User for Seed Production Monitoring System and seed production app.', '2018-09-03 18:32:06', '2018-09-03 18:32:06', 0, '2022-06-08 03:12:35'),
(6, 'kiosk-manager', 'Kiosk Manager', 'Kiosk Manager', '2018-10-16 18:08:27', '2018-10-16 18:08:27', 0, '2022-06-08 03:12:35'),
(7, 'bdd-manager', 'BDD Manager', 'BDD Manager', '2018-10-16 19:31:32', '2018-10-16 19:31:32', 0, '2022-06-08 03:12:35'),
(8, 'seed-inspector', 'Seed Inspector', 'Seed Inspector', '2019-02-18 01:05:02', '2019-02-18 01:05:02', 0, '2022-06-08 03:12:35'),
(9, 'bdd-head', 'BDD Head', 'BDD Head', '2019-05-15 19:24:28', '2019-05-15 19:24:28', 0, '2022-06-08 03:12:35'),
(10, 'isd-head', 'ISD Head', 'ISD Head', '2019-05-15 19:24:44', '2019-05-15 19:24:44', 0, '2022-06-08 03:12:35'),
(13, 'rcef-pmo', 'RCEF PMO', 'RCEF PMO users', '2019-08-30 08:27:17', NULL, 0, '2022-06-08 03:12:35'),
(14, 'accountant', 'Accountant', NULL, '2019-11-25 09:04:22', NULL, 0, '2022-06-08 03:12:35'),
(15, 'delivery-manager', 'Delivery Manager', NULL, '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(17, 'system-encoder', 'Encoder', 'System Encoder', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(18, 'system-admin', 'System Admin', 'System Administrators (RCEF-Programmers)', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(19, 'da-icts', 'DA-ICTS', 'DA-ICTD (Department og Agriculture - Information and Communication Technology Services)', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(20, 'data-officer', 'DATA OFFICER', 'data officer', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(21, 'coop-operator', 'COOP-OPERATOR', 'SEED COOPERATIVE OPERATOR', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(22, 'station-focal', 'Station FOCAL ', 'PhilRice Station FOCAL', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(23, 'encoder_yield', 'Yield Encoder', 'Yield Encoder', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(24, 'sed-caller', 'SED Callers', 'For SED callers that verifies data of farmers', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(25, 'techno_demo_encoder', 'Techno Demo Encoder', 'Techno Demo Encoder', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(26, 'sed-caller-manager', 'SED Callers Manager', 'Manage SED callers', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(27, 'it-sra', 'SRA/IT users', 'for e-binhi dashboard', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(28, 'extension_encoder', 'Extension Encoder', 'Encode KPS for Extension', '2021-09-07 00:31:00', '2021-09-07 00:31:00', 0, '2022-06-08 03:12:35'),
(29, 'buffer-inspector', 'Buffer Inspector', 'Buffer Inspector', '2020-05-26 05:53:32', NULL, 0, '2022-06-08 03:12:35'),
(30, 'rcef-programmer', 'RCEF Programmer', 'for RCEF Programmers team', '2021-10-26 02:29:36', NULL, 0, '2022-06-08 03:12:35'),
(31, 'ebinhi-implementor', 'eBinhi Implementor', 'Binhi e-padala implementor', '2021-10-26 02:30:14', NULL, 0, '2022-06-08 03:12:35'),
(32, 'coa', 'Coa', 'Coa user', '2021-12-21 14:17:47', NULL, 0, '2022-06-08 03:12:35'),
(33, 'dro', 'DRO', 'Data Report Officer', '2021-12-21 14:20:29', NULL, 0, '2022-06-08 03:12:35'),
(34, 'ces_payment_processor', 'CES Evaluator/Processor', 'CES Evaluator/Processor', '2021-12-21 14:21:58', NULL, 0, '2022-06-08 03:12:35'),
(35, 'payment_accountant', 'Accountant', 'Accountant', '2021-12-21 14:23:12', NULL, 0, '2022-06-08 03:12:35'),
(36, 'preReg-officer', 'PRE REGISTRATION OFFICER', 'PRE REG ', '2019-08-30 08:27:17', NULL, 0, '2022-06-08 03:12:35'),
(37, 'techno_demo_officer', 'Techno Demo Officer', 'Techno-Demo Officers', '2022-04-25 03:18:12', '2022-04-25 03:18:12', 0, '2022-06-08 03:12:35'),
(38, 'moet_dev', 'Moet Devs', 'Moet Devs', '2022-04-25 03:18:12', '2022-04-25 03:18:12', 0, '2022-06-08 03:12:35'),
(39, 'branch-it', 'Branch IT', 'IT personnel on stations', '2021-09-07 00:31:00', '2021-09-07 00:31:00', 0, '2022-06-08 03:12:35'),
(40, 'rcef-coordinator', 'rcef coordinator', 'User that has approved the farmer list from DA', '2018-08-23 19:04:47', '2018-08-23 19:04:47', 0, '2022-06-08 03:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `userId` int(10) unsigned NOT NULL,
  `roleId` int(10) unsigned NOT NULL,
  `sync_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`userId`, `roleId`, `sync_date`) VALUES
(23, 13, '2022-06-08 03:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachements`
--

CREATE TABLE IF NOT EXISTS `tbl_attachements` (
  `id` int(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_size` float NOT NULL,
  `status` int(50) NOT NULL,
  `uploaded_by_usernarme` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sync_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attachements`
--

INSERT INTO `tbl_attachements` (`id`, `file_name`, `file_path`, `file_size`, `status`, `uploaded_by_usernarme`, `date_created`, `sync_date`) VALUES
(1, 'asdas.pdf', 'public/attachment/asdas.pdf', 28598, 0, 'admin', '2023-09-04 01:10:40', '2023-09-04 01:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participants`
--

CREATE TABLE IF NOT EXISTS `tbl_participants` (
  `id` int(150) NOT NULL,
  `invitationCode` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `isPhilriceEmp` varchar(150) NOT NULL,
  `participantType` varchar(150) NOT NULL,
  `firstName` varchar(150) NOT NULL,
  `midName` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `extName` varchar(150) NOT NULL,
  `sex` varchar(150) NOT NULL,
  `ageBracket` varchar(150) NOT NULL,
  `isIndigenous` varchar(150) NOT NULL,
  `indigenousGroup` varchar(150) NOT NULL,
  `withDisability` varchar(150) NOT NULL,
  `disability` varchar(150) NOT NULL,
  `contactNo` varchar(150) NOT NULL,
  `philriceName` varchar(150) NOT NULL,
  `philriceStation` varchar(150) NOT NULL,
  `philriceUnit` varchar(150) NOT NULL,
  `philricePosition` varchar(150) NOT NULL,
  `affiliationName` varchar(150) NOT NULL,
  `affiliationAddress` varchar(150) NOT NULL,
  `affiliationRegion` varchar(150) NOT NULL,
  `affiliationPosition` varchar(150) NOT NULL,
  `affiliationEmail` varchar(150) NOT NULL,
  `affiliationContactNo` varchar(150) NOT NULL,
  `workNature` varchar(150) NOT NULL,
  `specialization` varchar(150) NOT NULL,
  `regNo` varchar(150) NOT NULL,
  `licenseNo` varchar(150) NOT NULL,
  `licenseExpiry` varchar(150) NOT NULL,
  `arrivalTime` varchar(150) NOT NULL,
  `arrivalDate` varchar(150) NOT NULL,
  `departureTime` varchar(150) NOT NULL,
  `departureDate` varchar(150) NOT NULL,
  `dietRestrictions` varchar(150) NOT NULL,
  `otherDiet` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_participants`
--

INSERT INTO `tbl_participants` (`id`, `invitationCode`, `email`, `isPhilriceEmp`, `participantType`, `firstName`, `midName`, `lastName`, `extName`, `sex`, `ageBracket`, `isIndigenous`, `indigenousGroup`, `withDisability`, `disability`, `contactNo`, `philriceName`, `philriceStation`, `philriceUnit`, `philricePosition`, `affiliationName`, `affiliationAddress`, `affiliationRegion`, `affiliationPosition`, `affiliationEmail`, `affiliationContactNo`, `workNature`, `specialization`, `regNo`, `licenseNo`, `licenseExpiry`, `arrivalTime`, `arrivalDate`, `departureTime`, `departureDate`, `dietRestrictions`, `otherDiet`) VALUES
(8, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Admin (Station)', 'Accountant I', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '11:23', '2023-09-04', '11:23', '2023-09-04', 'No restrictions', ''),
(9, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Administrative Support Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:21', '2023-09-04', '13:21', '2023-09-04', 'No restrictions', ''),
(11, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Administrative Support Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:21', '2023-09-04', '13:21', '2023-09-04', 'No restrictions', ''),
(12, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Administrative Support Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:21', '2023-09-04', '13:21', '2023-09-04', 'No restrictions', ''),
(14, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Administrative Support Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:21', '2023-09-04', '13:21', '2023-09-04', 'No restrictions', ''),
(15, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Administrative Support Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:21', '2023-09-04', '13:21', '2023-09-04', 'No restrictions', ''),
(16, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Agusan', 'Administrative Support Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:21', '2023-09-04', '13:21', '2023-09-04', 'No restrictions', ''),
(17, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Batac', 'Agronomy, Soils, and Plant Physiology Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:50', '2023-09-04', '13:50', '2023-09-04', 'Non-Pork', ''),
(20, 'iTZoJYcmQW', 'irincomanuel@gmail.com', 'philrice', 'presenter', 'joe', '', 'irinco', '', 'male', '30 y/o and below', 'No', '', 'No', '', '09551366350', 'Philippine Rice Research Institute', 'Batac', 'Agronomy, Soils, and Plant Physiology Division', 'Accountant II', '', '', '', '', '', '', '', 'N/A', 'N/A', 'N/A', '2023-09-04', '13:50', '2023-09-04', '13:50', '2023-09-04', 'Non-Pork', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_presenterprofile`
--

CREATE TABLE IF NOT EXISTS `tbl_presenterprofile` (
  `id` int(11) NOT NULL,
  `invitationCode` varchar(150) NOT NULL,
  `trackingNumber` varchar(255) NOT NULL,
  `presentationType` varchar(150) NOT NULL,
  `presentationTitle` varchar(150) NOT NULL,
  `authors` TEXT NOT NULL,
  `abstract` TEXT NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `firstNamePresenter` varchar(150) NOT NULL,
  `midNamePresenter` varchar(150) NOT NULL,
  `lastNamePresenter` varchar(150) NOT NULL,
  `extNamePresenter` varchar(150) NOT NULL,
  `positionPresenter` varchar(150) NOT NULL,
  `agencyPresenter` varchar(150) NOT NULL,
  `addressPresenter` varchar(150) NOT NULL,
  `emailPresenter` varchar(150) NOT NULL,
  `contactNoPresenter` varchar(150) NOT NULL,
  `bachelorsDegree` varchar(150) NOT NULL,
  `bachelorsUniversity` varchar(150) NOT NULL,
  `bachelorsYear` varchar(150) NOT NULL,
  `mastersDegree` varchar(150) NOT NULL,
  `mastersUniversity` varchar(150) NOT NULL,
  `mastersYear` varchar(150) NOT NULL,
  `doctorateDegree` varchar(150) NOT NULL,
  `doctorateUniversity` varchar(150) NOT NULL,
  `doctorateYear` varchar(150) NOT NULL,
  `presenterSpecialization` TEXT NOT NULL,
  `research` TEXT NOT NULL,
  `awards` TEXT NOT NULL,
  `scholarships` TEXT NOT NULL,
  `publications` TEXT NOT NULL,
  `researchGrants` TEXT NOT NULL,
  `dateSubmitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_presenterprofile`
--

INSERT INTO `tbl_presenterprofile` (`id`, `invitationCode`, `trackingNumber`, `presentationType`, `presentationTitle`, `authors`, `abstract`, `keywords`, `firstNamePresenter`, `midNamePresenter`, `lastNamePresenter`, `extNamePresenter`, `positionPresenter`, `agencyPresenter`, `addressPresenter`, `emailPresenter`, `contactNoPresenter`, `bachelorsDegree`, `bachelorsUniversity`, `bachelorsYear`, `mastersDegree`, `mastersUniversity`, `mastersYear`, `doctorateDegree`, `doctorateUniversity`, `doctorateYear`, `presenterSpecialization`, `research`, `awards`, `scholarships`, `publications`, `researchGrants`, `dateSubmitted`) VALUES
(8, 'iTZoJYcmQW', '', 'Poster', 'JOe Item asd', '[{"authName":"joe","authPosition":"author","authAgency":"philrice"}]', 'asfdfsdfsd', 'sdfsdf', 'sdfs', '', 'sdf', '', 'sf', 'sdf', 'sdf', 'asdf@gmail.com', '34534534543', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-09-04 03:50:30'),
(9, 'iTZoJYcmQW', '', 'Poster', 'QWERTYUKL:', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'asda', 'asdasd', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'safdfsdf', 'sdfsdf', 'sdfsdf', 'sdf', 'sfsd', 'sdfsd', '2023-09-04 05:22:23'),
(11, 'iTZoJYcmQW', '', 'Poster', 'QWERTYUKL:', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'asda', 'asdasd', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'safdfsdf', 'sdfsdf', 'sdfsdf', 'sdf', 'sfsd', 'sdfsd', '2023-09-04 05:32:34'),
(12, 'iTZoJYcmQW', '', 'Poster', 'QWERTYUKL:', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'asda', 'asdasd', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'safdfsdf', 'sdfsdf', 'sdfsdf', 'sdf', 'sfsd', 'sdfsd', '2023-09-04 05:33:35'),
(14, 'iTZoJYcmQW', 'Poster-0001', 'Poster', 'QWERTYUKL:', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'asda', 'asdasd', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'safdfsdf', 'sdfsdf', 'sdfsdf', 'sdf', 'sfsd', 'sdfsd', '2023-09-04 05:40:03'),
(15, 'iTZoJYcmQW', 'Paper-0001', 'Paper', 'QWERTYUKL:', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'asda', 'asdasd', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'safdfsdf', 'sdfsdf', 'sdfsdf', 'sdf', 'sfsd', 'sdfsd', '2023-09-04 05:40:58'),
(16, 'iTZoJYcmQW', 'Paper-0001', 'Paper', 'QWERTYUKL:', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'asda', 'asdasd', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'safdfsdf', 'sdfsdf', 'sdfsdf', 'sdf', 'sfsd', 'sdfsd', '2023-09-04 05:44:05'),
(17, 'iTZoJYcmQW', 'Paper-0001', 'Paper', 'QWERTYUKL', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'ghfgdhfgh', 'windows 10', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'dsfsdf', 'sdfds', 'sdfds', 'sdfs', 'sdfds', 'sdf', '2023-09-04 05:52:24'),
(18, 'iTZoJYcmQW', 'Paper-0004', 'Paper', 'QWERTYUKL', '[{"authName":"asdfas","authPosition":"asda","authAgency":"asdas"}]', 'ghfgdhfgh', 'windows 10', 'asda', '', 'asd', '', 'asda', 'ad', 'ads', 'ada@sdfesf.csad', '324542354234', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'No', 'N/A', 'N/A', 'dsfsdf', 'sdfds', 'sdfds', 'sdfs', 'sdfds', 'sdf', '2023-09-04 05:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receipients`
--

CREATE TABLE IF NOT EXISTS `tbl_receipients` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `acronym` varchar(255) NOT NULL,
  `agencyOrCooperative` varchar(255) NOT NULL,
  `officeAddress` varchar(255) NOT NULL,
  `headOrChair` text NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=360 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_receipients`
--

INSERT INTO `tbl_receipients` (`id`, `region`, `province`, `acronym`, `agencyOrCooperative`, `officeAddress`, `headOrChair`, `contactNo`, `email`, `type`) VALUES
(1, 'CAR', 'Benguet', 'DA-RFO CAR', 'DA-Cordillera Administrative Region Field Office', 'BPI Compound, Guisad Rd., 2600 Baguio City', 'Atty. JENNILYN M. DAWAYAN\nDirector III (CESO IV)\nRegional Executive Director in concurrent capacity as Officer-in-Charge, Human Settlements Development Corporation (HSDC)', 'Telefax: oc. 1400; (074) 443-4621; 445-4973 F \n(074) 445-4973; 443-4621 local 1419; l', 'da_carfu@yahoo.com; cpodsey@yahoo.com; ricedacar@gmail.com\n', 'DA-Regional Offices'),
(2, '1', 'La Union', 'DA-RFO I', 'DA-Regional Field Office I', 'Aguila Road, Capitol Compound, San Fernando City, 2500 La Union ', 'Dr. ANNIE Q. BARES\nDirector IV \nRegional Executive Director', 'Tel: (072) 242-1045-46\nTelefax: (072) 888-0341 loc. 4120', 'ilocos@da.gov.ph; ored.darfu_01@yahoo.com; da_reg01@yahoo.com', 'DA-Regional Offices'),
(3, '2', 'Cagayan', 'DA-RFO II', 'DA-Regional Field Office II', 'Nursery Compd., San Gabriel Village, Tuguegarao City 3500 Cagayan ', 'Dr. ROSE MARY G. AQUINO\nDirector III\nOfficer-in-Charge - Regional Executive Director', 'Updated: \nFax (078) 396.1328\nNo.: (078) 844-1031\nTel Nos.: 844-1331', 'ored.rfo2@da.gov.ph; da_rfu2000@yahoo.com; edillo_13160@yahoo.com', 'DA-Regional Offices'),
(4, '3', 'Pampanga', 'DA-RFO III', 'DA-Regional Field Office III', 'Capitol Compound, Sto. Ni?o, City of San Fernando, 2000 Pampanga', 'Dir. CRISPULO G. BAUTISTA, Jr.\nDirector IV\nRegional Executive Director', 'Tel: (045) 961-1233; 961-3472; 961-7699; 961-1452; 961-2631', 'rfo3.da@gmail.com; cris_1082@yahoo.com', 'DA-Regional Offices'),
(5, '4A', 'CALABARZON', 'DA-RFO IV-A', 'DA-Regional Field Office IV-A', 'Regional Marketing Information Center (RMIC) Bldg., BPI Compound, Visayas Ave., Diliman, 1128 Quezon City', 'Dir. MILO D. DELOS REYES\nDirector IV\nRegional Executive Director\n', 'Telefax: (02) 8928-5375 loc 4420/4437; 8927-8260; (02) 8920-0116; (02) 273.2474\nFax: (02) 8928-4132', 'rafis@calabarzon.da.gov.ph;\ndacalabarzon.info@gmail.com', 'DA-Regional Offices'),
(6, '4B', 'MIMAROPA', 'DA-RFO IV-B', 'DA-Regional Field Office IV-B', '3rd floor, ATI Bldg., Diliman, Quezon City', 'Engr. MARIA CHRISTINE C. INTING\nDirector IV\nOIC, Regional Executive Director', 'Telefax: (02) 8927-4350 / 426-4784; local 4400\nFax: (02) 8332-7274', 'ored4b@yahoo.com; aggerundio@gmail.com;\nmimaropa@mail.da.gov.ph', 'DA-Regional Offices'),
(7, '5', 'Camarines Sur', 'DA-RFO V', 'DA-Regional Field Office V', 'New Admin Bldg, DA RFO 5\nSan Agustin, Pili, Cam. Sur', 'Dir. RODEL P. TORNILLA\nDirector IV\nRegional Executive Director', 'Tel: (054) 8477-0381 loc 4538\nTelefax: (054) 477-0381', 'da5ored@yahoo.com; darfu5operations@yahoo.com', 'DA-Regional Offices'),
(8, '6', 'Iloilo', 'DA-RFO VI', 'DA-Regional Field Office VI', 'Parola, Port San Pedro, 5000 Iloilo City', 'Dir. DENNIS R. ARPIA\nDirector IV\nRegional Executive Director\n', 'Tel: (033) 336-4221; 337-1262 local 4602', 'darfu6@yahoo.com;\nda_rafid6@yahoo.com', 'DA-Regional Offices'),
(9, '7', 'Cebu', 'DA-RFO VII', 'DA-Regional Field Office VII', 'MES Compound, Estancia St., Maguikay, Mandaue City, Cebu', 'Dir. ANGEL C. ENRIQUEZ\nDirector IV (CESO III)\nRegional Executive Director', 'Tel: (032) 268-5187; 238-2163; local 4700\nFax: (032) 268-3063', 'darfu7@ymail.com', 'DA-Regional Offices'),
(10, '8', 'Leyte', 'DA-RFO VIII', 'DA-Regional Field Office VIII', 'Kanhuraw Hill, Tacloban City, 6500 Leyte', 'Dir. ANDREW RODOLFO T. ORAIS\nDirector IV \nRegional Executive Director', 'Tel: (053) 321-2024; 832-0694; 832-0834; 832-0812; local 4800\nFax: (053) 325-7242\nMobile: 0939.910.5984 (smart); 0917.726.8603 (globe)', 'da8ored@yahoo.com\n', 'DA-Regional Offices'),
(11, '9', 'Zamboanga del Sur', 'DA-RFO IX', 'DA-Regional Field Office IX', 'General Vicente Alvarez Street, 7000 Zamboanga City, Zamboanga del Sur', 'Dir. REYNALDO M. CAMPOMANES\nDirector III\nOIC-Regional Executive Director', 'Tel: (062) 993-3201, local 4900; 991-3188; (062) 991.3187\nFax: (062) 991-2715; 991-2536', 'da9rfu@gmail.com; \nrfo9@mail.da.gov.ph;\ngoflydoon@gmail.com;\noredpag_da9@yahoo.com', 'DA-Regional Offices'),
(12, '10', 'Misamis Oriental', 'DA-RFO X', 'DA-Regional Field Office X', 'Antonio Luna St., Cagayan de Oro City, 9000 Misamis Oriental', 'Dir. CARLENE C. COLLADO\nDirector IV (CESE)\nRegional Executive Director', 'Telefax: (088) 8856-6871; 231-3496, local 1000; 856-2753-55 local 1035 &1000', 'agri10cdo@gmail.com;', 'DA-Regional Offices'),
(13, '11', 'Davao del Sur', 'DA-RFO XI', 'DA-Regional Field Office XI', 'F Bangoy St, Poblacion District, Agdao, Davao City, 8000 Davao del Sur', 'Dir. ABEL JAMES I. MONTEAGUDO\nDirector IV \nRegional Executive Director  \n', 'Tel No. (082) 221-9697  \nFax No. (082) 226-3625', 'darfoxi.ored@gmail.com;\nbongonatejr@gmail.com', 'DA-Regional Offices'),
(14, '12', 'South Cotabato', 'DA-RFO XII', 'DA-Regional Field Office XII', 'Regional Center, Carpenter Hill, Koronadal City, South Cotabato', 'Dir. JOHN B. PASCUAL\nDVM\nChief Agriculturist\nOIC-Regional Executive Director', 'Telefax: (083) 8520-0460; (083) 228.3413; \nRED''s number: 0915-907-5136', 'ored@rfo12.da.gov.ph;\ndarfoxii.ored@gmail.com', 'DA-Regional Offices'),
(15, 'Caraga', 'Agusan del Norte', 'DA-RFO XIII', 'DA-Regional Field Office XIII', 'Capitol Site, Butuan City 8600 Agusan del Norte', 'Dir. Engr.  RICARDO M. O?ATE, Jr. \nDirector IV \nRegional Executive Director', 'Tel: (085) 341-4546; local 1300\nFax: (085) 341-2045\nTelefax: (085) 341-2114', 'dacaraga@yahoo.com; ored.dacaraga@gmail.com;\ncaraga@mail.da.gov.ph', 'DA-Regional Offices'),
(16, 'BARMM', 'Maguindanao', 'MAFAR', 'Ministry of Agriculture, Fisheries and Agrarian Reform', 'ARMM Compound, Governor Gutierrez Avenue, 9600 Cotabato City, Maguindanao', 'Hon. MOHAMMAD S. YACOB\nMinister', 'Tel: (064) 421-1234; 421-1248\n\n', 'mafar@bangsamoro.gov.ph', 'DA-Regional Offices'),
(17, 'CAR', 'Apayao', 'ASPMPC', 'Apayao Seed Producers Multi-Purpose Cooperative', 'San Isidro Sur, Luna, Apayao', 'Mr. Arthurito B. Batalla,\nChair', '0906-473-1577', 'apayaoseedproducersmpc@yahoo.com', 'Farmer Partners'),
(18, 'CAR', 'Kalinga', 'MAC', 'Matagoan Agriculture Cooperative', 'Bulanao Norte, Tabuk City', 'Mr. Adam S. Banusan,\nChair ', '0936-354-0178 (Roland Kimmayong)', 'matagoanagriculture@gmail.com', 'Farmer Partners'),
(19, '1', 'Ilocos Norte', 'OINSPC', 'One Ilocos Norte Seed Producers Cooperative ', 'Buyon, Bacarra, Ilocos Norte', 'Mr. Prudencio R. Galiza,\nChair', '0998-858-5802; 0918-580-1090 (Rommel Ramos)', 'nelia_tabucol@yahoo.com; rommelramos70@yahoo.com', 'Farmer Partners'),
(20, '1', 'Ilocos Norte', 'SGMPC', 'Seed Growers Multi-Purpose Cooperative, Inc.\n', 'Laoag City, Ilocos Norte\n', 'Anghel D. Padron, Sr.\nChair', '0947-383-1005 (Anghel Padron)', '', 'Farmer Partners'),
(21, '1', 'Ilocos Sur', 'ISSGMPC', 'Ilocos Sur Seed Growers Multi-Purpose Cooperative', 'Sagayaden, Cabugao, Ilocos Sur', 'Mr. Bonifacio S. Siababa,\nChair', '0919-804-8225;\n0910-796-6746', 'mykarenziesiababa@gmail.com', 'Farmer Partners'),
(22, '1', 'La Union', 'SGMPC of La Union', 'Seed Growers Multi-Purpose Cooperative of La Union ', 'Santiago Sur, San Fernando City, La Union', 'Mr. Floro A. Micua,\nChair', '0908-896-0380', 'carlitoeslava@gmail.com', 'Farmer Partners'),
(23, '1', 'Pangasinan', 'POSGNMPC', 'Pangasinan Organic Seed Growers and Nursery Multi-Purpose Cooperative ', 'San Vicente, Urdaneta City, Pangasinan', 'Mr. Nelson D. Domingo,\nPresident & Chair, BOD', '0945-866-5799;0936-917-4658;', 'lanifedungca@gmail.com; litoarenas@yahoo.com.ph; nsqcs.pangasinan@gmail.com', 'Farmer Partners'),
(24, '2', 'Cagayan', 'CSPMPC', 'Cagayan Seed Producers Multi-Purpose Cooperative', '41 Diversion Rd., San Gabriel Village, Tuguegarao City, Cagayan', 'Mr. Nestor T. Bautista, \nChair', '0927-339-1144\n0917-158-4954; 0917-307-7670', 'cspmpc.1991@gmail.com', 'Farmer Partners'),
(25, '2', 'Cagayan', 'NCSPMPC', 'Northern Cagayan Seed Producers Multi-Purpose Cooperative', 'Paruddun Norte, Aparri, Cagayan', 'Mr. Amante Dimog,\nChair', '0975-657-5132; 0936-900-8597; 0916-765-5687', 'ntolentino25@yahoo.com', 'Farmer Partners'),
(26, '2', 'Isabela', 'ISGMPC', 'Isabela Seed Growers Multi-Purpose Cooperative, Inc.', 'National Highway, Alinam, Cauayan City, Isabela', 'Mr. Alfredo R. Paguila,\nChair', '0927-385-6756  (sir Bernard)', 'isgmpc222@yahoo.com', 'Farmer Partners'),
(27, '2', 'Isabela', 'MBSPC', 'MARIIS Burgos Seed Producers Cooperative ', 'Purok 5, Caliguian, Burgos, Isabela', 'Alejandro A. Tegui,\nChair', '0977-177-0252; 0977-171-6252\n', 'alejandrotegui02@gmail.com', 'Farmer Partners'),
(28, '2', 'Isabela', 'RMC', 'Rainbow Marketing Cooperative', 'Centro, San Mateo, Isabela', 'Rustico R. Turingan,\nChair', '0956-762-1136', 'ysosa51@yahoo.com; gleimaureen@gmail.com; turinganrustyrjt@gmail.com', 'Farmer Partners'),
(29, '2', 'Isabela', 'RHRSGMPC', 'Roxas Hybrid Rice Seed Growers Multi-Purpose Cooperative ', 'Bantug, Roxas, Isabela', 'Mr. Ernesto C. Gamboa, \nChairman', '0906-537-3865', 'roxashybridcs@gmail.com', 'Farmer Partners'),
(30, '2', 'Isabela', 'SMMPC', 'San Manuel Multi-Purpose Cooperative ', 'District 3, San Manuel, Isabela', 'Mr. Wilfredo C. Antonio,\nChair', '0995-654-2411; 0920-344-6292', 'smmpco89@yahoo.com; crystalgrainsmarketing@yahoo.com', 'Farmer Partners'),
(31, '2', 'Quirino', 'GHAC', 'Golden Harvest Agriculture Cooperative', 'Saranay 2, Magsaysay, Saguday, Quirino', 'Mr. Marlon B. Prado,\nChair', '0935-531-3865', 'goldenharvestagricoop@gmail.com', 'Farmer Partners'),
(32, '3', 'Bulacan', 'BSGMPC', 'Bulacan Seed Growers Multi-Purpose Cooperative ', '470 Rizal St., San Jose, Baliwag, Bulacan', 'Mr. Antonio B. De Jesus\nChair', '0925-889-0079', 'Bspmpc82593@yahoo.com', 'Farmer Partners'),
(33, '3', 'Nueva Ecija', 'NESGMPC', 'Nueva Ecija Seed Grower Multipurpose Cooperative ', 'Maligaya, Science City of Mu?oz, Nueva Ecija', 'Mr. Ariel B. Dolores, \nChair, BOD', '0917-207-2964; 0917-179-2817', 'sheilame45@yahoo.com; nesgacoop@yahoo.com', 'Farmer Partners'),
(34, '3', 'Nueva Ecija', 'CABSEEDS', 'Cabanatuan City Seed Grower Multipurpose Cooperative', 'Circumferential Road, Brgy. D.S. Garcia, Cabanatuan City, Nueva Ecija', 'Mr. Nelson E. Villanueva,\nChair', '0975-409-2691', 'cabseeds@yahoo.com; PO.cabseeds@yahoo.com', 'Farmer Partners'),
(35, '3', 'Nueva Ecija', 'South NESGMPC', 'South Nueva Ecija Seed Growers Multi-Purpose Cooperative ', 'Poblacion, San Isidro, Nueva Ecija', 'Mr. Leonardo D. Guinto,\nChair', '(044) 806-4694;\n0916-464-8758', 'law.guinto@gmail.com', 'Farmer Partners'),
(36, '3', 'Pampanga', 'PSGMPC', 'Pampanga Seed Growers Multi-Purpose Cooperative ', 'Purok 1, Culubasa, Mexico, Pampanga', 'Mr. Jett Yver A. Yamzon,\nChair', '0927-284-9726; 0927-284-9726', 'psgmpc_37@yahoo.com', 'Farmer Partners'),
(37, '3', 'Tarlac', 'ACFASGRO, MPC', 'Abagon Compact Farm and Seed Growers, MPC ', 'Abagon, Gerona, Tarlac', 'Sol R. Gonzales,\nChair', '0917-113-5565;\n0917-117-7935', 'acfasgro07@gmail.com', 'Farmer Partners'),
(38, '3', 'Tarlac', 'TPSGPMC', 'Tarlac Provincial Seed Growers Primary Multipurpose Cooperative', 'Zone 1, 373 Amucao, Tarlac City', 'Bernard Calilung\nChair', '0917-387-2011', 'bgcalilung20@gmail.com', 'Farmer Partners'),
(39, '4A', 'Quezon', 'QPSGAI', 'Quezon Palay Seed Growers Association, Inc.', 'Salinas, Lucena City, Quezon', 'Mr. Moises S. Vidal,\nChair', '0919-602-9384; \n0998-322-8359;\n0930-331-6267; 0912-464-9980; 9303316267', 'jdvecinal@yahoo.com; vecinalgregorio@gmail.com', 'Farmer Partners'),
(40, '4A', 'Laguna', 'SAMALAGUN, Inc', 'Samahan ng mga Magbibinhi sa Laguna, Inc.', 'Pansol, Pila, Laguna', 'Mohamed Hussain Marickar\nPresident', '0927-329-3893', 'pio.javier@yahoo.com.ph', 'Farmer Partners'),
(41, '4A', 'Laguna', 'ACOPROLAGUNA \n', 'Agriculture Cooperative of Progressive Laguna', 'Oogong, Sta. Cruz, Laguna', 'Romeo L. Guilatco, Jr.\nChairman', '0929-718-6922\n', 'juvy_920@yahoo.com\n', 'Farmer Partners'),
(42, '4B', 'Occidental Mindoro', 'SEPCOM', 'Seed Producers Cooperative of Occidental Mindoro-District II', 'San Roque I, San Jose, Occidental Mindoro', 'Edna A. Ysibido,\nOIC-Chair', '0939-918-8283; 09081878699; 09091391320', 'sepcom_coop2001@yahoo.com', 'Farmer Partners'),
(43, '4B', 'Occidental Mindoro', 'Mina de Oro SGMPC', 'Mina De Oro Seed Growers Multi-Purpose Cooperative ', 'San Roque I, San Jose, Occidental Mindoro', 'Ms. Gilda S. Umali,\nChair', '0948-196-1227; \n0998-547-1093', 'rosaocruz@yahoo.com.ph;\nniaoccimindoroirmo@gmail.com', 'Farmer Partners'),
(44, '4B', 'Occidental Mindoro', 'CASEEDCO', 'Calintaan Seed Growers Cooperative  ', 'New Dagupan, Calintaan, Occidental Mindoro', 'Ms. Estelita L. Jaravata,\nChair', '0912-469-9252; \n0906-937-9929;\n0997-788-0042', 'caseedco10@gmail.com; FredaylnLopez12@gmail.com', 'Farmer Partners'),
(45, '4B', 'Oriental Mindoro', 'OMSPMC ', 'Oriental Mindoro Seed Producers Multi-Purpose Cooperative ', 'BPI Compound, Barcenaga, Naujan, Oriental Mindoro', 'Mr. Edilberto S. Jarabe,\nChair', '0939-473-7619; 0919-000-7456', 'orminseedproducersmpc@yahoo.com;\nrioban030576@gmail.com', 'Farmer Partners'),
(46, '4B', 'Palawan', 'NRSPAI', 'Narra Rice Seed Producers Association Inc. ', 'Poblacion, Narra, Palawan', 'Mr. Dominador E. Calica,\nChair', '0908-891-7891; 0905-445-7175', 'naraspa2010@gmail.com', 'Farmer Partners'),
(47, '5', 'Camarines Norte', 'CANSEGMUPCO', 'Camarines Norte Seed Growers Multi-Purpose Cooperative ', 'P-1 Bactas, Basud, Camarines Norte', 'Gil N. Del Barrio,\nBOD Chair', '0946-738-7043', 'gildelbarrio547@gmail.com\nluzpayla@yahoo.com; lpayla18@gmail.com; ', 'Farmer Partners'),
(48, '5', 'Camarines Sur', 'LSGAI', 'Libmanan Seed Growers Association Incorporated', 'Danawan, Libmanan, Camarines Sur', 'Glicerio P. Brioso III,\nBOD Chair', '0919-503-0066;\n0998-270-7738', 'gpbriosoiii@gmail.com', 'Farmer Partners'),
(49, '5', 'Camarines Sur', 'BSGAI\n', 'Bicolandia Seed Growers Association, Inc.\n', 'Taytay, Goa, Camarines Sur\n', 'Salve R. Milante,\nChairperson\n', '0922-842-7471', 'amvicmilante@gmail.com\n', 'Farmer Partners'),
(50, '5', 'Camarines Sur', 'CMPC', 'Camsur Multi-Purpose Cooperative\n', 'Cadlan, Pili, Camarines Sur\n', 'Annielen Panerio,\nGeneral Manager\n', '0931-783-2295; 0912-017-9804', 'camsur.mpc@gmail.com\n', 'Farmer Partners'),
(51, '5', 'Albay', 'ASPMPC', 'Albay Seed Producers Multi-Purpose Cooperative ', 'Mendez, Polangui, Albay', 'Marilyn A. Salceda,\nChair', '0923-743-1726', 'wisdom_nelam2000@yahoo.com; albay_seed@yahoo.com', 'Farmer Partners'),
(52, '5', 'Albay', 'BSGMPC', 'Bicol Seeds Growers Multi-Purpose Cooperative\n', 'Ligao City, Albay\n', 'Nestor T. Reyes,\nChair\n', '0939-938-5800; 0918-920-6320', 'bicolseedsgrowersmultipurposec@gmail.com', 'Farmer Partners'),
(53, '5', 'Masbate', 'MSGAI', 'Masbate Seed Growers Association, Inc. ', 'Kinamaligan, Masbate', 'Adonis F. dela Cruz,\nChair', '0920-814-9681', '', 'Farmer Partners'),
(54, '6', 'Iloilo', 'WVFMPSPC', 'West Visayas Federation of Multi-Purpose and Seed Producers Cooperative', 'Buntatala, Jaro, Iloilo City', 'Ms. Juanita B. Villaluna,\nChair', '0998-563-8286;\n0998-226-9395', 'federation_seeds@yahoo.com.ph; joan.nonles21@gmail.com', 'Farmer Partners'),
(55, '6', 'Negros Occidental', 'NOASEPCO', 'Negros Occidental Accredited Seed Producers Cooperative ', 'Emerald St., Purok San Luis, Sum-Ag, Bacolod City', 'Mr. Jesus R. Jimenez,\nChair', '0927-423-5043; \n0999-990-9285', 'nonilo_nacion@yahoo.com; nofarimco@gmail.com;\nnpalayseed@yahoo.com', 'Farmer Partners'),
(56, '7', 'Bohol', 'BOFAMCO', 'Bohol Farmers Multi-Purpose Cooperative ', 'Purok 2, Poblacion, Pilar, Bohol', 'Mr. Nerio Quisto,\nChair', '0950-814-6512; 0951-614-1318; 0929-978-0110 ', 'bofamco@yahoo.com', 'Farmer Partners'),
(57, '7', 'Negros Oriental', 'RICOSGA\n', 'Rice and Corn Seed Growers Association, Inc.\n', 'Brgy. Maslog, Sibulan, Negros Oriental\n', 'Mr. Ariel G. Capilla\nChair', '0977-482-0373; 0917-167-5636; 0919-318-5146\n', 'capari0108@gmail.com\n', 'Farmer Partners'),
(58, '8', 'Leyte', 'LSGMPC', 'Leyte Seed Growers Multi-Purpose Cooperative', '505 Mabinit St., San Antonio, Poblacion, Alang-alang, Leyte', 'Mr. Alejandro L. Cinco,\nChair', '0906-263-0857; 0997-435-0930; 0928-255-1013', 'leyteseedgrowersmpc@gmail.com', 'Farmer Partners'),
(59, '8', 'Leyte', 'SIDELFA', 'San Isidro de Leyte Farmer''s Association', 'Brgy. Ikiran, Alangalang, Leyte', 'Mr. Severo C. Olo,\nPresident', '0908-586-2023', 'sidelfar8@gmail.com ', 'Farmer Partners'),
(60, '8', 'Southern Leyte', 'SLSGA', 'Southern Leyte Seed Growers'' Association/ Visayas Seed Producers'' Multi-Purpose Cooperative', 'St. Bernard, 6616 Southern Leyte', 'Mr. Severo C. Olo,\nPresident', '0917-633-4849;\n0906-114-1320', 'severoolo123@gmail.com', 'Farmer Partners'),
(61, '8', 'Eastern Samar', 'ESSGA', 'Eastern Samar Seed Growers Association', 'OPAS, Capitol Site, Alang-alang, Borongan City', 'Arturo J. Enolpe,\nChair', '0961-785-5623 (Arturo Enolpe)', 'essgainc@gmail.com', 'Farmer Partners'),
(62, '9', 'Zamboanga del Norte', 'ZNSPI', 'Zamboanga del Norte Seed Producers, Inc.', '50 Gonzales St., Dipolog City, Zamboanga del Norte', 'Mr. Albert T. Concha, Jr.,\nPresident', '0950-802-3673 (Bernard Larot)', 'larotmaryjean@gmail.com; nsqcsipilregion9@gmail.com', 'Farmer Partners'),
(63, '9', 'Zamboanga del Sur', 'ZDSRSGA', 'Zamboanga del Sur Rice Seed Growers Association, Inc.', 'San Francisco District, Pagadian City', 'Mr. Elias G. Jamero,\nPresident', '0918-541-4819\n(Alonto Marcaban)', 'alontomarcaban915@gmail.com', 'Farmer Partners'),
(64, '9', 'Zamboanga Sibugay', 'ZSSPAI', 'Zamboanga Sibugay Seed Producers'' Association, Inc.', 'Purok 1, Poblacion, Siay, Zamboanga Sibugay', 'Jerry S. Jore,\nChair', '0917-717-3270', 'robertojore@yahoo.com', 'Farmer Partners'),
(65, '10', 'Bukidnon', 'BUSGAPCO', 'Bukidnon Seed Growers Association (BUSGA) Producers Cooperative ', 'Farmer''s Training Office, Capitol Compound, Malaybalay City, Bukidnon', 'Mr. Reynaldo E. Capacio,\nChair, BOD', '0927-147-2307; \n0917-632-6022', 'busgapc@yahoo.com', 'Farmer Partners'),
(66, '10', 'Lanao Del Norte', 'LASEMCO ', 'Lanao Del Norte Seed Growers Multi-Purpose Cooperative', 'Purok 4, Poblacion, Kapatagan, Lanao del Norte', 'Mr. Noe A. Andalan,\nChair', '0956-180-1118; 0926-330-6303', 'noeandalan@ymail.com', 'Farmer Partners'),
(67, '11', 'Davao del Norte', 'DAMSEPCO', 'Davao Multi-Purpose Seed Producers'' Cooperative, Inc.', 'Purok Santan, Visayan Village, Tagum City, 8100 Davao del Norte', 'Mr. Servino B. Hitalia,      \nChair', '0919-744-3864\n0935-249-3902; ', 'damsepcotagumcity@yahoo.com; damsepcotagum@gmail.com', 'Farmer Partners'),
(68, '11', 'Davao del Norte', 'SMSAI\n', 'Southern Mindanao Seeds Agri-Enterprises, Inc. \n', 'Magugpo West, Tagum City, Davao del Norte\n', 'Mr. Jaime P. Miranda,\nChair', '0930-424-2222\n', 'smsaitaguminc@yahoo.com\n', 'Farmer Partners'),
(69, '11', 'Davao Oriental', 'S2R', 'Seed to Rice Producers Cooperative', 'Katrina Bldg., Aguinaldo St., Poblacion, Lupon, Davao Oriental', 'Mr. Henry A. Lim, \nChair', '0912-014-9572; \n0946-228-8728', 's2r.lupon@gmail.com', 'Farmer Partners'),
(70, '11', 'Davao Oriental', 'DOSEPCO', 'Davao Oriental Seed Producers'' Cooperative ', 'Poblacion, Banaybanay, 8208 Davao Oriental', 'Mr. Balbino A. Alingalan,\nChair', '0918-727-7224', 'dosepcoop@gmail.com; dosepco@yahoo.com', 'Farmer Partners'),
(71, '12', 'North Cotabato', 'CISPMPC', 'Cotabato Integrated Seed Producers'' and Marketing Cooperative ', 'Kilada, Matalam, 9406 North Cotabato', 'Mr. Sergio D. Arellano,\nChairman', '0918-673-2024; 0907-413-9398', 'robertpascua46@yahoo.com; cispmc1991@gmail.com', 'Farmer Partners'),
(72, '12', 'South Cotabato', 'BINTIKU', 'Binhian ng Timog Kutabato Multi-Purpose Cooperative', 'Purok Mangga, Dajay, Surallah, 9512 South Cotabato', 'Engr. Jonathan D. Javelosa, \nChairman', '0905-620-7269; 0917-315-1933', 'bintikumpac@yahoo.com.ph', 'Farmer Partners'),
(73, '12', 'North Cotabato ', 'CAASCO', 'Cotabato Agricultural Allied Services Cooperative ', 'Sto. Ni?o St., Poblacion 1, Midsayap, North Cotabato', 'Mr. Paul Roberto C. Cruz,\nChair', '0909-907-9387', 'ningjocelyn28@gmail.com', 'Farmer Partners'),
(74, '12', 'North Cotabato ', 'CARDMPC\n', 'Carmen Agricultural Resources & Development Multi-Purpose Cooperative\n', 'Lanitap, Gen. Luna, Carmen, North Cotabato\n', 'Mr. Usman G. Nosel,\nBOD Chair', '0906-192-6042 ', 'cardmpc10@gmail.com', 'Farmer Partners'),
(75, '12', 'North Cotabato ', 'USPMC\n', 'United Seed Producers Marketing Cooperative\n', 'Osias, Kabacan, North Cotabato\n', 'Mr. Noel M. Esteban,\nChair', '0930-320-6374', '', 'Farmer Partners'),
(76, '12', 'Sultan Kudarat', 'CIMPC', 'Central Isulan Multi-Purpose Cooperative', 'Purok Pag-asa MAREM Co., Bambad, Isulan, Sultan Kudarat', 'Ms. Arlene L. Adaniel,\nChair', '0935-155-4394; \n0909-759-7520', 'centralisulanmultipurposecoop@gmail.com; \nabs032371@gmail.com', 'Farmer Partners'),
(77, '12', 'Sultan Kudarat', 'LGSPMPC', 'Lambayong Grains Seed Producers Multi-Purpose Cooperative ', 'Lambayong, Sultan Kudarat', 'Mr. Reuben Manicsic,\nChairman', '0926-455-8878', 'peterpedro0428@gmail.com', 'Farmer Partners'),
(78, '12', 'Sultan Kudarat', 'LSOAMPC', 'Lebak Sustainable Organic Agriculture Multi-Purpose Cooperative', 'Aurelio Freires Sr., Lebak, Sultan Kudarat', 'Mr. Valmike Talagtag,\nChair', '0910-048-6087', 'lesoampc@yahoo.com;\nwilsarmark2@gmail.com', 'Farmer Partners'),
(79, 'Caraga', 'Agusan del Norte', 'BUSEPCO', 'Butuan Seed Producers Multi-Cooperative', '511 Lopez Jaena Street, Butuan City, 8600, Agusan del Norte', 'Mr. Castor Deogracias L. Jaldo, \nChair', '0910-113-4949', 'casjaldo52@gmail.com;\nbusepcobxu@gmail.com; jenilynpemchi@gmail.com\n', 'Farmer Partners'),
(80, 'Caraga', 'Agusan del Norte', 'SMPC\n', 'Sumilihon Multi-Purpose Cooperative\n', 'Sumilihon, Butuan City, Agusan del Norte\n', 'Ms. Julita R. Jandayan,\nChairman', '0961-630-6339', 'janmsc862271990@gmail.com', 'Farmer Partners'),
(81, 'Caraga', 'Agusan del Sur', 'SAMPCO\n', 'Southern Agusan Multipurpose Cooperative\n', 'Poblacion, Trento, Agusan del Sur', 'Edwin B. Tabano,\nChair ', '0910-919-4449; 0910-377-9510', 'sasepco1@gmail.com;\nsasepcoagusan@yahoo.com\n', 'Farmer Partners'),
(82, 'BARMM', 'Maguindanao', 'UAPFPC\n', 'Upian Agri Pinoy Farmers Producer Cooperative ', 'Blensong, Upi, Maguindanao', 'Mr. Jonathan B. Acopio, \nChair, BOD', '0953-123-7870; \n0917-525-1715;\n0935-523-1736', 'upianagripinoycoop@yahoo.com', 'Farmer Partners'),
(83, 'region', 'province', 'acronym', 'agencyOrCooperative', 'officeAddress', 'headOrChair', 'contactNo', 'email', 'type'),
(84, 'CAR', 'Abra', 'ASIST', 'Abra State Institute of Sciences and Technology ', 'Lagangilang, Abra', 'Dr. Gregorio T. Turqueza Jr. \nPresident', 'Tel: (074) 752-8171; 752-8414; 0917-862-9298; 09275033987 (Dr. ,GT Turqueza)\n''09177491736- staff \n', 'asistmain@yahoo.com,\npresident@asist.edu.ph,\ntadeostephen@gmail.com', 'SUCs'),
(85, 'CAR', 'Apayao', 'ASC', 'Apayao State College', 'Conner, Apayao', 'Dr. John N. Cabansag\nPresident', 'Tel/Fax: (078) 844 0929 Mobile: 09189376233; 0975-300-1550/0917-716-7963 ', 'op_asc@yahoo.com', 'SUCs'),
(86, 'CAR', 'Kalinga', 'KSU', 'Kalinga State University', 'Bulanao Norte, Tabuk City, Kalinga', 'Dr. Eduardo T. Bagtang\nSUC President III', 'Mobile: 0917-822-6145; \nT/Fax #: (074) 872-2045\n09171774609\n''09175680618\n''09365706616- staff', 'ksumail@ksu.edu.ph,\netbagtang@ksu.edu.ph\n\nRex- Silaw-an Langngag\nOIC-Dean/Instructor-I (''09365706616)', 'SUCs'),
(87, 'CAR', 'Benguet', 'BSU', 'Benguet State University', 'Km. 5, La Trinidad, 2601 Benguet', 'Dr. Felipe S. Comila \nPresident', 'Tel: (074) 442-2176; (074) 442-2281; \n(074) 422-2127-2402', 'president@bsu.edu.ph', 'SUCs'),
(88, 'CAR', 'Ifugao', 'IFSU', 'Ifugao State University', 'Nayon, Lamut, 3605 Ifugao', 'Dr. Eva Marie Codamon-Dugyon\nPresident', 'Telefax: (074) 382-2671; Fax: (074) 382-2108\nCel: 0956-203-5586;  0917 129 8310; 0917-114-9572', 'dcpia@ifsu.edu.ph; ifsu.codete@gmail.com\n\npresident@ifsu.edu.ph / president201801.ifsu@gmail.com', 'SUCs'),
(89, 'CAR', 'Mountain Province', 'MPSPC', 'Mountain Province State Polytechnic College', 'Bontoc, Mountain Province', 'Dr. Edgar G. Cue\nSUC President III', 'Mobile: 0999-990-8165;\nHOTLINE 0946-725-7193 (Registrar''s Office)', 'mpspc@mpspc.edu.ph;\nmpspc1969@gmail.com\n\nop@mpspc.edu.ph   \n', 'SUCs'),
(90, '1', 'Ilocos Norte', 'MMSU', 'Mariano Marcos State University', 'Brgy. 16-S Quiling Sur, City of Batac\n2906 Ilocos Norte, Philippines', 'Dr. Shirley C. Agrupis\nPresident', 'Tel/fax: (077) 600-0459; \n(077) 792-3191; 792-3878 ', 'op@mmsu.edu.ph\nscagrupis@mmsu.edu.ph ,shirleyagrupis@yahoo.com', 'SUCs'),
(91, '1', 'Ilocos Sur', 'ISPSC', 'Ilocos Sur Polytechnic State College', 'Sta. Maria, 2705 Ilocos Sur', 'Dr. Danilo B. Bose\nOIC - SUC President III', 'Telefax: (077) 732-5512\nTel. No.: (077) 604-1422', 'ispsc_2705@yahoo.com\n\nEmail: registrarispsc@yahoo.com\n', 'SUCs'),
(92, '1', 'Ilocos Sur', 'UNP', 'University of Northern Philippines', 'Tamag, Vigan City, 2700 Ilocos Sur', 'Dr. Erwin F. Cadorna\nPresident', 'Telefax: (077) 722-2802; 722-2810\n \nInstitutional Telephone: 077-722-28-10\nInstitutional Fax No.: 077-722-28-10\nInstitutional Head?s Telephone: 077-722-28-10 / 0977-824-2106', 'op@unp.edu.ph', 'SUCs'),
(93, '1', 'La Union', 'DMMMSU', 'Don Mariano Marcos Memorial State University ', 'Sapilang, Bacnotan, 2515 La Union', 'Dr. Jaime I. Manuel, Jr. \nPresident', 'Tel: (072) 682-2596/98, Fax: (072) 682-2601; 0917 773 8884 \n\n', 'dmmmsucamis@yahoo.com;\ndmmmsu@dmmmsu.edu.ph;\npresident@dmmmsu.edu.ph\n\nPamela Sison Immatong\nRosemarie Otanes Tattlao\npamelaimmatong@dmmmsu.edu.ph', 'SUCs'),
(94, '1', 'Pangasinan', 'PSU', 'Pangasinan State University ', 'Alviar St., Lingayen, 2401 Pangasinan', 'Dr. Elbert M. Galas\nUNIVERSITY PRESIDENT', 'Tel:  (075) 542-3955; 542-4057; (075) 542-4261; 542-4057; 542-6683\nTelefax: 574-5159; (075) 574-2500\nCel nos.: 0951-735-0126\n0926-275-8092', 'prpio@psu.edu.ph; lingayencampus@psu.edu.ph', 'SUCs'),
(95, '2', 'Batanes', 'BSC', 'Batanes State College', 'San Antonio, Basco, Batanes', 'Dr. Djovi R. Durante\nPresident of BSC', 'Mobile: 0998-971-1458; 0915-110-4227\n\n0905-786-7863', 'batanes.bsc@gmail.com\n\ndjovi_durante@bscbatanes.edu.ph', 'SUCs'),
(96, '2', 'Cagayan', 'CSU', 'Cagayan State University ', 'Caritan Sur, Tuguegarao City, Cagayan Valley 3500', 'Dr. Urdujah A. Tejada, CESO II \nPresident', 'Tel:  (078) 844-0430/ 844-0098/ 0099 Loc. 122; (078) 844-0098/9, 844-1852; 844-1093; 844-0430; 844-4119\nFax: (078) 844-1534 ', 'president@csu.edu.ph\n\nLowel Viernes Guittap \nlv.guittap@gmail.com; csusmira@csu.edu.ph', 'SUCs'),
(97, '2', 'Isabela', 'ISU', 'Isabela State University', 'San Fabian, Echague, 3309 Isabela (Main Campus); Garita Heights, Cabagan, 3328 Isabela (Cabagan Campus); Rang-ayan, Roxas, 3320 Isabela (Roxas Campus)', 'Dr. Ricmar P. Aquino \nPresident', 'Tel:  (078) 305-9013', 'president@isu.edu.ph\ninfo@isu.edu.ph', 'SUCs'),
(98, '2', 'Quirino', 'QSU', 'Quirino State University', '3401 Andres Bonifacio, Diffun, Quirino', 'Dr. Hermenegildo F. Samoy, Jr. \n SUC President II', 'Mobile: 0906-348-5258;\n0905-774-1579', ' info@qsu.edu.ph;\nquirinostateuniversity@yahoo.com.ph', 'SUCs'),
(99, '2', 'Nueva Vizcaya', 'NVSU', 'Nueva Vizcaya State University', 'Don Mariano Perez, Bayombong, Nueva Vizcaya', 'Dr. Wilfredo A. Dumale, Jr.\nUniversity President', 'Tel: (078) 803-1060, 321-2112; (078) 392-1111; 321-2112', 'info@nvsu.edu.ph', 'SUCs'),
(100, '3', 'Nueva Ecija', 'CLSU', 'Central Luzon State University ', 'Science City of Mu?oz, 3120 Nueva Ecija', 'Dr. Edgar A. Orden,\nPresident', 'Tel:  (044) 456-0691; 456-5202; 456-0107; 456-0688', 'clsu@clsu.edu.ph\nop@clsu.edu.ph', 'SUCs'),
(101, '3', 'Nueva Ecija', 'NEUST', 'Nueva Ecija University of Science and Technology', 'Gen. Tinio St., Cabanatuan City, 3100 Nueva Ecija', 'Dr. Feliciana P. Jacoba\nPresident', 'Tel: (044): 463-0226 TF; 600-3594; 464-3674', 'neustmain@yahoo.com;\nneustmain@neust.edu.ph\n\nArnold Ventura Damaso- Dean\narnold.damaso@gmail.com,''09152237718, deanoffice.neustcoagriculture@gmail.com', 'SUCs'),
(102, '3', 'Pampanga', 'PSAU', 'Pampanga State Agricultural University', 'San Agustin, Magalang, 2011 Pampanga', 'Dr. Anita G. David\nSUC President IV', 'Tel: (045) 866-0800 Telefax: (045) 343-4950; 343-4959', 'inquiry@psau.edu.ph\n\npresidentoffice@psau.edu.ph', 'SUCs'),
(103, '3', 'Pampanga', 'DHVTSU', 'Don Honorio Ventura Technological State University', 'Cabambangan, Bacolor, Pampanga, Bacolor, Pampanga', 'Dr. Enrique G. Baking\nPresident', 'Telephone Number: +63 (045) 649 8050', 'info@dhvsu.edu.ph', 'SUCs'),
(104, '3', 'Zambales', 'PRMSU', 'President Ramon Magsaysay State University', 'Iba, 2201 Zambales', 'Dr. Roy N. Villalobos \nPresident', '047 (602-6120-24)', 'rmtupresident@yahoo.com;\nuniversitypresident@prmsu.edu.ph', 'SUCs'),
(105, '3', 'Bataan', 'BPSU ', 'Bataan Peninsula State University ', 'BPSU Main Campus, Capitol Compound, Balanga City, 2100 Bataan', 'Dr. Ruby S. Matibag\nPresident', 'Telefax: (047) 237-2350\n', 'president@bpsu.edu.ph;\nbatpenstateu@yahoo.com;\ncentral_records@bpsu.edu.ph\n', 'SUCs'),
(106, '3', 'Bulacan', 'BASC', 'Bulacan Agricultural State College', 'Pinaod, San Ildefonso, 3010 Bulacan', 'Dr. Jameson H. Tan\nPresident', 'Tel:  (044) 901-1427; Telefax: (044) 677-1371; (044) 792 4409\n(044) 816 7121 ', 'asscatjvg@gmail.com\n\ninfo@basc.edu.ph', 'SUCs'),
(107, '3', 'Bulacan', 'BulSU', 'Bulacan State University', 'Brgy. Guinhawa, Malolos City, 3000 Bulacan', 'Dr. Cecilia S. Navasero-Gascon  \nPresident', 'Telefax: (044) 791-0153; Tel: (044) 919-7800 local 1016; 791-0852;791-7118; 791-2424; ', 'officeofthepresident@bulsu.edu.ph;\ninfo@bulsu.edu.ph', 'SUCs'),
(108, '3', 'Tarlac', 'TAU', 'Tarlac Agricultural University', 'Malacampa, Camiling, 2306 Tarlac', 'Dr. Max P. Guillermo \nPresident', 'Telefax: (045) 934-0216/0716\n', 'presoffice@tau.edu.ph\ntca_reg3@yahoo.com.ph\ncaf.tau@gmail.com\n\nAgnes Cacal Perey-Assistant Dean, CAF/Asso. Prof V\naperey@tau.edu.ph;\n0917-194-0771', 'SUCs'),
(109, '3', 'Tarlac', 'TSU', 'Tarlac State University', 'Romulo Blvd., San Vicente, Tarlac City, Tarlac\n', 'Dr. Arnold E. Velasco\nPresident', 'Telefax: (045) 982-0110; 606-8101; 606-8123; Hotline: +63 45 606-8100\n ', 'helpdesk@tsu.edu.ph; pres_office@tsu.edu.ph', 'SUCs'),
(110, '3', 'Aurora', 'ASCOT', 'Aurora State College of Technology', 'Sitio Dicaloyungan, Brgy. Zabali, Baler, 3200 Aurora', 'Dr. Eutiquio L. Rotaquio, Jr.\nPresident', 'Telefax: (042) 209-4354\nManila Offi ce: Tel. (02) 888 67733.; 0970 3677 800(Dr. Rotaquio)\n\nTel. No. (042) 714 5661', 'president@ascot.edu.ph; rotaquiojr.eutiquio@yahoo.com', 'SUCs'),
(111, '4-A', 'Batangas', 'BSU', 'Batangas State University', 'Rizal Avenue Extension, Batangas City 4200, Batangas', 'Dr. Tirso A. Ronquillo\nPresident', 'Fax: (043) 723-0339 loc. 100\n779-8400 local1546, 1822', 'president@g.batstate-u.edu.ph\nbatstateupresident@gmail.com\n', 'SUCs'),
(112, '4-A', 'Cavite', 'CvSU', 'Cavite State University', 'Bancod, Indang, 4122 Cavite', 'Dr. Hernando D. Robles\nPresident', 'Smart: 0960 444 2242 | Globe: 0945 418 7947 / ', 'office.president@cvsu.edu.ph; cafenr@cvsu.edu.ph\n', 'SUCs'),
(113, '4-A', 'Laguna', 'LSPC', 'Laguna State Polytechnic University', 'L. de Leon St., Siniloan, 4019 Laguna', 'Dr. Mario R. Briones\nUniversity President', 'Tel: (049): 810-4112; 812-4110; 813-0452\n\n049-5023314', '', 'SUCs'),
(114, '4-A', 'Laguna', 'UPLB', 'University of the Philippines Los Ba?os,Pedro R. Sandoval Ave.', ' Los Ba?os, Laguna', 'Dr. Jose V. Camacho, Jr \nChancellor\n\n', '+63 49 536 2567 \n+63 49 536 2894', 'uplb@up.edu.ph; oc.uplb@up.edu.ph\n\nAna Vera Oleta <agoleta@up.edu.ph>Chancellor''s staff', 'SUCs'),
(115, '4-A', 'Quezon', 'SLSU ', 'Southern Luzon State University ', 'Brgy. Kulapi, Lucban, 4328 Quezon', 'Dr. Doracie B. Zoleta-Nantes\nPresident', 'Tel: (042) 540-4763; 540-4816; 540-4653; 540-4087; 540-3775; 540-4787\nFax: (042) 911-1252', 'slsu_support@slsu.edu.ph', 'SUCs'),
(116, '4-B', 'Marinduque', 'MSC', 'Marinduque State College', 'P. Manguera St. Tanza, Boac, Marinduque', 'Prof. Diosdado P. Zulueta, DPA\nSUC President III', 'Tel: (042) 332-2028;\n(042) 332 2728', 'president@mscmarinduque.edu.ph; sucpresident.msc@gmail.com', 'SUCs'),
(117, '4-B', 'Oriental Mindoro', 'MinSCAT', 'Mindoro State College of Agriculture and Technology', 'Alcate, Victoria, 5202 Oriental Mindoro', 'Dr. Levy B. Arago, Jr.\nPresident', 'Telefax: (043) 286-7096; Fax: (043) 286-2368; 0917-313-7288/ 0927-834-6088\n+63 977 846 7228', ' universitypresident@minsu.edu.ph ', 'SUCs'),
(118, '4-B', 'Occidental Mindoro', 'OMSC', 'Occidental Mindoro State College', 'Labangan Poblacion, San Jose, Occidental Mindoro', 'Dr. Elbert Clamor Edaniol, EdD.\nSUC President III', 'Tel: (043) 457-0231\nFax: (043) 457-0259', 'omsc_9747@yahoo.com', 'SUCs'),
(119, '4-B', 'Romblon', 'RSU', 'Romblon State University', 'Liwanag, Odiongan, 5505 Romblon', 'Dr. Merian Catajay-Mani, EdD., CESE\nPresident', 'Tel: (042): 567-5273; 567-5859; 508-3176', 'romblonstateu@gmail.com\ncaff@rsu.edu.ph', 'SUCs'),
(120, '4-B', 'Palawan', 'WPU', 'Western Philippines University ', 'San Juan, Aborlan, 5300 Palawan (WPU Liaison Office: Dian Cor. Diesel Streets, Palanan, Makati City)', 'Atty. Joselito C. Alisuag\nOIC President', 'Tel: (048) 433-4480; Telefax: (048) 433-4367; \n(02) 831-2014 (Liaison Office); +639193836791\n', 'elsa_p_manarpaac@yahoo.com or wpu.edu@gmail.com\npres.office@wpu.edu.ph\n\nDanny C. Abrina (Instructor III)-''09078821436,dcabrina@up.edu.ph', 'SUCs'),
(121, '4-B', 'Palawan', 'PSU', 'Palawan State University', 'Puerto Princesa City, Palawan', 'Dr. Ramon M. Docto,\nPresident', 'Tel: (048) 433-2379; 433-2158; 433-5303', 'rdocto@psu.palawan.edu.ph\npsu@psu.palawan.edu.ph', 'SUCs'),
(122, '5', 'Camarines Norte', 'CNSC', 'Camarines Norte State College', 'F. Pimentel Ave., Daet, 4600 Camarines Norte', 'Dr. Marlo M. De La Cruz\nPresident', 'Telephone No: (054) 721-2672  or 440-1199\nPICRO Mobile No:  09688983078 | 09171439973\nMobile No: 09190042141', 'president@cnsc.edu.ph', 'SUCs'),
(123, '5', 'Camarines Sur', 'CBSUA ', 'Central Bicol State University of Agriculture ', 'San Jose, Pili, 4418 Camarines Sur', 'Dr. Alberto N. Naperi\nSUC President IV', 'Telefax: (054) 477-3341; 477-5531; 811-3134; 811-3453', 'op@cbsua.edu.ph\npio@cbsua.edu.ph', 'SUCs'),
(124, '5', 'Camarines Sur', 'ParSU', 'Partido State University', 'San Juan Bautista St., Goa, 4422 Camarines Sur', 'Dr. Raul G. Bradecina,\nSUC President III                                   ', '63 969 608 7792\n+63 945 413 9825\n(054) 871-2090', 'op@parsu.edu.ph\nparsu_op@yahoo.com\npartidostateu8888@gmail.com', 'SUCs'),
(125, '5', 'Catanduanes', 'CatSU ', 'Catanduanes State University', 'Calatagan, Virac, 4800 Catanduanes', 'Dr. Patrick Alain T. Alanza, Ph.D., J.D.\nSUC President III', 'Tel: (052) 811-3134; -1485;-1295; 0949-037-2980\n0969-025-9166', 'catsu1961@catsu.edu.ph\n', 'SUCs'),
(126, '5', 'Sorsogon', 'SSC', 'Sorsogon State College', 'Magsaysay St., Cogon, Sorsogon City 4700 Sorsogon', 'GERALDINE F. DE JESUS, Ed.D.\nSUC President IIl', 'Tel: (056):  211-0200; 211-1869; 211-1845\n(056) 211-0103', 'ssc@sorsu.edu.ph; \nssc@sorsogonstatecollege.edu.ph', 'SUCs'),
(127, '5', 'Albay', 'BU', 'Bicol University', 'Main campus: Rizal St., Legazpi City, Albay; Satellite campus: Daraga, Albay', 'Dr. Baby Boy Benjamin D. Nebres III\nSUC President IV', 'Telefax: Main campus: (052) 821-7939; 480-0167\n Satellite campus: (052) 484-6336', 'bupresident@bicol-u.edu.ph\nop@bicol-u.edu.ph', 'SUCs'),
(128, '5', 'Masbate', 'DEBESMSCAT', 'Dr. Emilio B. Espinosa, Sr. Memorial State College of Agriculture and Technology', 'Cabitan, Mandaon, 5411 Masbate', 'Dr. Arnel B. Millesca\nSUC President III', 'Tel: (056) 333-0882; 333-4207; \n', 'debesmscat.masbate@gmail.com', 'SUCs'),
(129, '6', 'Aklan', 'ASU', 'Aklan State University', 'Banga, 5601 Aklan', 'Dr. Emily M. Arangote\nSUC President III', '(036) 267-5801\n(036) 267-6586', 'president@asu.edu.ph\npres.emily@asu.edu.ph', 'SUCs'),
(130, '6', 'Capiz', 'CapSU', 'Capiz State University', 'Main: Iloilo East Coast - Capiz Rd, Pilar, 5804 Capiz', 'Dr. Editha C. Alfon, \nPresident', 'Tel: (036) 6211-350', 'ecalfon@capsu.edu.ph;\nscbiclar@gmail.com; admin@capsu.edu.ph', 'SUCs'),
(131, '6', 'Iloilo', 'CPU', 'Central Philippines University', 'Jaro, 5000 Iloilo City', 'Dr. Teodoro C. Robles,\nPresident', '0998-3292787; (063)(033) 3291971;', 'infocenter@cpu.edu.ph;\ncommunications@cpu.edu.ph;\nmarypenetrante@gmail.com', 'SUCs'),
(132, '6', 'Iloilo', 'WVSU', 'West Visayas State University', 'Luna St., La Paz, 5000 Iloilo City', 'Dr. Joselito F. Villaruz,\nPresident', 'Tel: (033) 320-0870 to 77 loc 1016\nExecutive Secretary: loc 1101 & 1102\nFax no: (033) 320-0879', 'president@wvsu.edu.ph', 'SUCs'),
(133, '6', 'Iloilo', 'ISATU', 'Iloilo Science and Technology University', 'Burgos St., La Paz, 5000 Iloilo City\n', 'Dr. Raul F. Muyong\nSUC President III', 'Tel: (033) 320-7190; 528-2060; \nTelefax: 329-4274 (Pres. Extension number: 102)\n', 'mail@isatu.edu.ph\n\nJulito Contado Aligaen-Campus Administrator\nleon@isatu.edu.ph, ''09774127130', 'SUCs'),
(134, '6', 'Negros Occidental', 'CHMSC', 'Carlos Hilado Memorial State College', 'Talisay City, Negros Occidental', 'Dr. Norberto P. Mangulabnan\nSUC President III', 'Telefax: (034) 495-5389; 495-4064; 495-2360; 712-0003\n0977-065-3681 ; 0960-420-7253', 'externalaffairs@chmsc.edu.ph\ncier@chmsu.edu.ph\n\n', 'SUCs'),
(135, '6', 'Negros Occidental', 'CPSU ', 'Central Philippines State University ', 'Camingawan, Kabankalan City, Negros Occidental', 'Dr. Aladino C. Moraca,\nSUC President II', 'Telefax: (034) 702-9903\nMobile:  0917-301-5565; 0920-623-8718', 'cpsu_main@cpsu.edu.ph;\nnsca_kabcity@yahoo.com.ph\n\nMa. May Plando Opino (Instructor),\nopinomay.2@gmail.com\n', 'SUCs'),
(136, '6', 'Guimaras', 'GSC', 'Guimaras State College', 'Buenavista, Guimaras', 'Dr. Lilian Diana B. Parre?o\nSUC President III', 'Telefax: (033) 580-8244; \n580-5614\n', 'guimstate@gsc.edu.ph; \ngscbrdsec@yahoo.com; \nrta@gsc.edu.ph; \nfrenz.gal@gsc.edu.ph', 'SUCs'),
(137, '6', 'Antique', 'UA', 'University of Antique', 'Sibalom, Antique', 'Dr. Pablo S. Crespo, Jr.,\nPresident', 'Tel: (036) 543-5626; 543-8161;  543-7955; 0965-335-7769(CBA)', 'executiveassistant@antiquespride.edu.ph\n\naro@antiquespride.edu.ph\npresident@antiquespride.edu.ph\nhamtic@antiquespride.edu.ph', 'SUCs'),
(138, '7', 'Bohol', 'BISU ', 'Bohol Island State University (Bilar Campus)', 'Zamora, Bilar, 6317 Bohol', 'DR. ANTHONY M. PENASO\nSUC President III \n\nDr. Marietta M. Macalolot\nCampus Director, Bilar Campus', '038-5359003; \n+63385359022  09490496058 / 09461806441', 'info@bisu.edu.ph;\nbisubilar.edu@gmail.com\nop@bisu.edu.ph', 'SUCs'),
(139, '7', 'Bohol', 'BISU', 'Bohol Island State University ', 'Tagbilaran City, Bohol', 'DR. ANTHONY M. PENASO\nSUC President III \n\nDr. Proceso M. Castil\nCampus Director, Main Campus', 'Tel: 038-5010429, 09298556206', 'regupobar@bisu.edu.ph', 'SUCs'),
(140, '7', 'Negros Oriental', 'SU', 'Silliman University', '1 Hibbard Avenue, Dumaguete City, 6200 Negros Oriental', 'Dr. Betty Cernol McCann, RPsy, CSSP\nPresident', '4201901 loc 210\n', 'pres@su.edu.ph', 'SUCs'),
(141, '7', 'Negros Oriental', 'NORSU', 'Negros Oriental State University', 'Kagawasan Ave., Dumaguete City, Negros Oriental', 'Dr. Joel P. Limson,\nPresident', 'Tel: (035) 225-9400 local 212; 225-6393 local 300;\n522-5050;\n', 'jojo42363@yahoo.com;\npresident.office@norsu.edu.ph\nnegrosorientalstateuniversity@gmail.com', 'SUCs'),
(142, '7', 'Cebu', 'CNU', 'Cebu Normal University', 'Osme?a Boulevard, Cebu City', 'DR. FILOMENA T. DAYAGBIL\nOfficer-in-Charge, Office of the University President', 'Trunkline 254-1452/253-7915/254-6814\nDirect:253-9611\nLocal: 100/101\n', 'info@cnu.edu.ph; pres@cnu.edu.ph', 'SUCs'),
(143, '8', 'Eastern Samar', 'ESSU', 'Eastern Samar State University', 'Brgy. Maypangdan, Borongan City, 6800 Eastern Samar', 'Dr. Andres C. Pagatpatan Jr.\nSUC President III', 'Tel: (055) 261-2500, -2725; 0916 185 5375', 'essuguiuanofficial@gmail.com;\ninfo@essu.edu.ph', 'SUCs'),
(144, '8', 'Samar', 'SSU', 'Samar State University', 'Brgy. Guindapunan, Arteche Blvd.Catbalogan City, Samar 6700 ', 'Dr. Marilyn D. Cardoso,\nPresident', '(055)-530-0629', 'info@ssu.edu.ph', 'SUCs'),
(145, '8', 'Leyte', 'EVSU', 'Eastern Visayas State University', 'Arch. Lino R. Gonzaga Avenue,\nTacloban City, Leyte', 'Dr. Dennis C. de Paz \nPresident', 'Tel: (053) 321-1084;\nTelefax: +63 53 888 2565', 'president@evsu.edu.ph;\ninfo@evsu.edu.ph', 'SUCs'),
(146, '8', 'Leyte', 'VSU', 'Visayas State University', 'Visca, Baybay City, 6521 Leyte', 'Dr. Edgardo E. Tulin,\nPresident', 'Trunkline: +63 (53) 565 0600\nFax No: +63 (53) 563 7067', 'op@vsu.edu.ph;\nnformation@vsu.edu.ph', 'SUCs'),
(147, '8', 'Leyte', 'SLSU ', 'Southern Leyte State University', 'Sogod, Southern Leyte', 'Hon. JUDE A. DUARTE\nUniversity President', 'Tel: (053) 382-3294\n0998-868-5334', 'president@southernleytestateu.edu.ph;\nslsumaincampus@gmail.com', 'SUCs'),
(148, '8', 'Northern Samar', 'UEP', 'University of Eastern Philippines ', 'University Town, Catarman, 6400 Northern Samar', 'Dr. Cherry I. Ultra,\nPresident', 'Tel: (055) 251-8611; 354-1414; 354-1347\n\n', 'ueppres@gmail.com\nuepnsofficial@gmail.com\n', 'SUCs'),
(149, '9', 'Zamboanga Sur', 'WMSU', 'Western Mindanao State University', 'Normal Road, Baliwasan, 7000 Zamboanga City', 'Dr. Ma. Carla A. Ochotorena\nUniversity President', 'Tel: (062) 991-3840; \n 992-4238', 'wmsu@wmsu.edu.ph; odwesmaarrdec@gmail.com', 'SUCs'),
(150, '9', 'Zamboanga Sur', 'JHCSC', 'J.H. Cerilles State Colleges (Zamboanga del Sur Agricultural College', 'Dumingag, 7028 Zamboanga del Sur', 'MARY JOCELYN VILLEJO-BATTUNG, PH.D.\nSUC President II', 'Mobile:+63 907 328 0848\n', 'main@jhcsc.edu.ph', 'SUCs'),
(151, '', 'Zamboanga del Norte', '', 'Jose Rizal Memorial State University - Tampilisan Campus', 'ZNAC, Tampilisan', '', '9355715457', 'jrmsutampilisan@jrmsu.edu.ph', 'SUCs'),
(152, '9', 'Zamboanga del Norte', 'SNAS', 'Sindangan National Agriculture School', 'Goleo, Sindangan, Zamboanga del Norte', 'Dr. Erlinda M. Orilla,\nPrincipal', '(065) 224 2042\n0915 193 5733', '', 'SUCs'),
(153, '10', 'Bukidnon', 'CMU', 'Central Mindanao University', 'University Town, Musuan, Maramag, 8710 Bukidnon', 'Dr. Rolito G. Eballe \nPresident', 'Mobile #: 09173110212\nLandline: 888-828-7899\n\n', 'cmu1910op@cmu.edu.ph\n\na. Jessabell Quidlat Cabada-''09177170425, Instructor- jessabellcabada@buksu.edu.ph\nb. Genessa Jesy Teroy Pagote- genessajesypagote@buksu.edu.ph, Faculty,''09175819253', 'SUCs'),
(154, '10', 'Bukidnon', 'BSU', 'Bukidnon State University', 'Fortich St., Malaybalay City, Bukidnon', 'Dr. Joy M. Mirasol\nUniversity President\n', 'Telefax: (088) 813-2717; 221-2237; 813-5661-63; loc 104 or 130;  0917-876 -2653\n', 'bsupresoffice@gmail.com', 'SUCs'),
(155, '10', 'Misamis Oriental', 'USTP\n\nMOSCAT', 'University of Science and Technology of Southern Philippines\n(Misamis Oriental State College of Agriculture and Technology )', 'Magsaysay St., Claveria, 9004 Misamis Oriental', 'Hon. Ambrosio B. Cultura II, Ph.D.\nPresident, USTP System', 'Tel: 856.1738 Local 170', 'ambrosio.cultura@ustp.edu.ph', 'SUCs'),
(156, '11', 'Davao del Norte', 'USEP', 'University of Southeastern Philippines', 'Tagum City, 8100 Davao del Norte', 'Dr. Lourdes C. Generalao,\nPresident', 'Telephone No: +6382 227 - 8192 local 255-256', 'president@usep.edu.ph; \npad@usep.edu.ph\ncars@usep.edu.ph', 'SUCs'),
(157, '11', 'Compostella Valley', 'CVSC', 'Davao de Oro State College (Compostela Valley State College) ', 'Purok 10 Poblacion, Compostela, Compostela Valley', 'Dr. Christie Jean B. Ganiera\nCESE\nPresident', 'Mobile: 0929-169-5328', 'president@ddosc.edu.ph', 'SUCs'),
(158, '11', 'Davao Oriental', 'DOrSU', 'Davao Oriental State College of Science and Technology', 'Guang-guang, Mati City, Davao Oriental', 'Dr. Roy G. Ponce\nPresident', 'Tel: (087) 388-3195; 388-3477', '', 'SUCs'),
(159, '12', 'North Cotabato', 'USM', 'University of Southern Mindanao', 'USM Avenue, Kabacan, 9407 North Cotabato', 'Dr. Francisco Gil N. Garcia\nSUC President IV', 'Tel: (064) 572-2138', 'info@usm.edu.ph;\nop@usm.edu.ph', 'SUCs'),
(160, '12', 'Sultan Kudarat', 'SKSU ', 'Sultan Kudarat State University', 'ACCESS, EJC Montilla, Tacurong City 9800 Sultan Kudarat', 'Dr. Samson L. Molao,\nPresident', 'Tel: (064): 200-7336; 200-4287; 200-4261; 0998-546-1009', 'officeofthepresident@sksu.edu.ph;\ninfo@sksu.edu.ph', 'SUCs'),
(161, 'Caraga', 'Agusan del Norte', 'CarSU ', 'Caraga State University', 'Ampayon, Butuan City, 8600 Agusan del Norte', 'Dr. Rolyn C. Daguil\nPresident', 'Telefax: (085) 341-3249; 341-2296; 342-3047; 342-1079', 'op@carsu.edu.ph', 'SUCs'),
(162, 'Caraga', 'Agusan del Norte', 'FSUU', 'Father Saturnino Urios University', 'San Francisco St. cor. JC Aquino Ave., Butuan City, 8600 Agusan del Norte', 'Fr. John Christian U. Young,\nPresident', 'Tel.: (085) 342 1102, local 2211/2212; 342-1830, local 1102', 'president@urios.edu.ph', 'SUCs'),
(163, 'Caraga', 'Agusan del Sur', 'ASSCAT', 'Agusan del Sur State College of Agriculture and Technology', 'San Teodoro, Bunawan, 8506 Agusan del Sur', 'Dr. Joy C. Capistrano\nCollege President', 'Telefax: (085) 266-2525\n09483679266', 'op@asscat.edu.ph\njoycapistrano@asscat.edu.ph', 'SUCs'),
(164, 'Caraga', 'Surigao del Norte', 'SNCAT', '(Surigao del Norte College of Agriculture and Technology )', 'Magpayang, Mainit, 8407 Surigao del Norte', 'HON. GREGORIO Z. GAMBOA JR.\nSUC President III', 'Tel: (086) 826-3765\n09189288857', 'info@ssct.edu.ph', 'SUCs'),
(165, 'Caraga', 'Surigao del Sur', 'NEMSU\n\nSDSSU ', 'North Eastern Mindanao State University\n\n(Surigao del Sur State University)', 'Rosario, Tandag City, 8300 Surigao del Sur', 'DR. NEMESIO G. LOAYON\nThe University President', 'Tel: (086) 214-4221', 'information@nemsu.edu.ph\nnemsuop@nemsu.edu.ph\n', 'SUCs'),
(166, 'BARMM', 'Marawi City', 'MSU', 'Mindanao State University- Marawi City (Main Campus)', 'Marawi City, 9700 Lanao del Sur', 'Atty. Basari D. Mapupuno\nMSU System President', 'Tel: (02) 524-8222; 526-4325 Fax: (063) 352-1001', 'op@msumain.edu.ph', 'SUCs'),
(167, 'NCR', 'Quezon City', 'ATI', 'Agricultural Training Institute', 'Quezon City', 'Engr. REMELYN R. RECOTER\nDirector IV\nMNSA, CESO III\nOfficer-in-Charge, Bureau Director', 'Tel: (02) 8929-8541 (loc 220&228) to 49 \nTelefax: (02) 8920-9792;\n(02) 8928-7397 ', 'director@ati.da.gov.ph;\nati_director@yahoo.com; ', 'Bureaus'),
(168, 'NCR', 'Quezon City', 'BAR', 'Bureau of Agricultural Research ', 'Quezon City', 'Dr. JUNEL B. SORIANO\nBureau Director', 'Tel: (02) 8461-2900, local 2020-29; 8461-2800;  Direct Line (02) 8285-7871 \nTelefax: (02) 920-0227, 920-0226 loc 201\nFax: (02) 8927-5691', 'r4d@bar.gov.ph; \njsoriano@bar.gov.ph', 'Bureaus'),
(169, 'NCR', 'Quezon City', 'BAFE', 'Bureau of Agriculture and Fisheries Engineering', 'Quezon City', 'Engr. ARIODEAR C. RICO\nDirector IV\nOfficer-in-Charge, Bureau Director', 'Telefax: (02) 8941-8151;\n(02)8294-6452 (loc 2470 / 2472 / 2492 / 2494) \n(02)8351-8120;\n(02)8294-9741\nTrunkline: (02) 8928-8756 to 65, local 2495 (OED)', 'od.bafe@gmail.com;\nbafe@da.gov.ph;\nbafedirector@gmail.com', 'Bureaus'),
(170, 'NCR', 'Quezon City', 'BAFS', 'Bureau of Agricultural and Fisheries Standards', 'Quezon City', 'Dir. KAREN KRISTINE A. ROSCOM\nChief Science Research Specialist\nBureau Director', 'Tel: (02) 8928-8756 to 65 loc 3301', 'bafs@da.gov.ph;\nbafs.oed@gmail.com\nbafs.od@da.gov.ph', 'Bureaus'),
(171, '', 'Diliman, Quezon City', 'BAI', 'Bureau of Animal Industry ', 'Diliman, Quezon City', 'Dir. PAUL C. LIMSON\nAgricultural Center Chief IV\nOfficer-in-Charge, Bureau Director', '(02) 8528 2240 local 1101-1103', 'director@bai.gov.ph', 'Bureaus'),
(172, '', '', 'BFAR', 'Bureau of Fisheries and Aquatic Resources ', '', 'Atty. DEMOSTHENES R. ESCOTO\nAttorney V\nOfficer-in-Charge, Bureau Director', '(+63) 920-9761669; 8539-5685', 'do@bfar.da.gov.ph', 'Bureaus'),
(173, 'NCR', 'Manila', 'BPI', 'Bureau of Plant Industry', 'Manila', 'Dr. GERALD GLENN F. PANGANIBAN\nDirector III\nBureau Director', 'Tel.: (02) 8525-7909;\n8525-2987;\n8521-7650;\n8332-7567', 'bpi.do@buplant.da.gov.ph \nbpi.information@yahoo.com;\nda.urbanagriculture@gmail.com ', 'Bureaus'),
(174, 'NCR', 'Quezon City', 'BSWM', 'Bureau of Soils and Water Management ', 'Quezon City', 'Dr. GINA P. NILO\nDirector IV\n', 'Tel: (02) 8920-4382; \n923-0454; 920-4378; \n(08)529-7640 local 201\nFax: (02) 8920-4318', 'director@bswm.da.gov.ph;\n\n', 'Bureaus'),
(175, 'NCR', 'DA-PRRI, Liaison Office, 2nd Floor DA-Bldg., Elliptical Road, Diliman, Quezon City, Metro Manila\n\nInterim Office: DA-Research Complex, Sanito, \nIpil, Zamboanga Sibugay\n', 'PRRI', 'Philippine Rubber Research Institute ', 'DA-PRRI, Liaison Office, 2nd Floor DA-Bldg., Elliptical Road, Diliman, Quezon City, Metro Manila\n\nInterim Office: DA-Research Complex, Sanito, \nIpil, Zamboanga Sibugay\n', 'Dr. CHERYL L. EUSALA\nExecutive Director III', 'Tel: (062) 333-2879  ', 'prri_office@yahoo.com.ph\n', 'Bureaus'),
(176, 'NCR', '28th Floor, One San Miguel Avenue (OSMA) Building, San Miguel Avenue corner Shaw Boulevard, Ortigas Center, Pasig City', 'ACPC', 'Agricultural Credit Policy Council', '28th Floor, One San Miguel Avenue (OSMA) Building, San Miguel Avenue corner Shaw Boulevard, Ortigas Center, Pasig City', 'Dir. JOCELYN ALMA R. BADIOLA\nExecutive Director IV\n(CESE)\nOfficer-in-Charge, Executive Director', '(632) 8634-3320 to 21; (632) 8634-3326', 'jrbadiola@acpc.gov.ph;\ninfo@acpc.gov.ph', 'Attached Agencies'),
(177, 'NCR', 'FPA Building, Bureau of Animal Industry Compound, Brgy. Vasra, Diliman, Quezon City', 'FPA ', 'Fertilizer and Pesticide Authority', 'FPA Building, Bureau of Animal Industry Compound, Brgy. Vasra, Diliman, Quezon City', 'Dir. JULIETA B. LANSANGAN\nExecutive Director', '8441-16-01', 'fpacentral77@gmail.com', 'Attached Agencies');
INSERT INTO `tbl_receipients` (`id`, `region`, `province`, `acronym`, `agencyOrCooperative`, `officeAddress`, `headOrChair`, `contactNo`, `email`, `type`) VALUES
(178, '', 'Corporate 101 Building, Mother Ignacia Avenue, Brgy. South Triangle, Quezon City 1103', 'NFRDI ', 'National Fisheries Research and Development Institute', 'Corporate 101 Building, Mother Ignacia Avenue, Brgy. South Triangle, Quezon City 1103', 'Dr. LILIAN C. GARCIA\nExecutive Director IV (CESO V)', '8352-3596', 'nfrdi.directorsoffice@gmail.com', 'Attached Agencies'),
(179, '', '', 'NMIS', 'National Meat Inspection Service ', '', 'Dir. CLARITA M. SANGCAL, DVM\nSupervising Meat Control Officer\nOfficer-in-Charge, Executive Director', '(02) 892-479-80\n\nlocal 102/103', 'nmisexedir@gmail.com', 'Attached Agencies'),
(180, 'NCR', 'Apacible Hall, Department of Agriculture Compound\nElliptical Road, Diliman, Quezon City, Philippines\n', 'PCAF', 'Philippine Council for Agriculture and Fisheries', 'Apacible Hall, Department of Agriculture Compound\nElliptical Road, Diliman, Quezon City, Philippines\n', 'Dir. NESTOR D. DOMENDEN\nCESO IV \nExecutive Director III', 'Tel. Nos.: (632) 920-4092/928-1966/928-8752 to 65 loc. 2602\nFax No.: (632) 920-3992\nWebsite: pcaf.da.gov.ph', 'Ackpcafofficial@pcaf.da.gov.ph', 'Attached Agencies'),
(181, 'NCR', '3/F PhilFIDA, DA-PCAF Bldg., Department of Agriculture Compound,\n  Elliptical Road, Diliman, Quezon City.', ' PhilFIDA', 'Philiippine Fiber Industry Development Authority', '3/F PhilFIDA, DA-PCAF Bldg., Department of Agriculture Compound,\n  Elliptical Road, Diliman, Quezon City.', 'ATTY. GENEVIEVE E. VELICARIA-GUEVARRA, CESE\nAssistant Secretary and Concurrent Officer-in-Charge, Executive Director', ' (02) 928 8756 to 65 Loc. 2650', 'oed@philfida.da.gov.ph', 'Attached Agencies'),
(182, 'ATTACHED CORPORATIONS', '', '', '', '', '', '', '', 'Attached Agencies'),
(183, 'NCR', 'BAI Compound, Visayas Avenue, Diliman, Quezon City 1101 Philippines', 'NDA', 'National Dairy Authority', 'BAI Compound, Visayas Avenue, Diliman, Quezon City 1101 Philippines', 'DR. GABRIEL L. LAGAMAYO\nOffice of the Administrator\nNDA-Central Office', 'Tel. No.: (632) 8926-0733-35 Fax: (632) 8926-8847\n89260733-35 Local # 220', 'fcmagtoto@nda.da.gov.ph\ndairymail@nda.da.gov.ph', 'Attached Agencies'),
(184, 'NCR', 'Quezon City, Metro Manila', 'NFA', 'National Food Authority', 'Quezon City, Metro Manila', 'RODERICO R. BIOCO\nAdministrator', 'Tel.: (02) 8929-7319; 8926-7237;\n09171139347', 'administrator@nfa.gov.ph', 'Attached Agencies'),
(185, 'NCR', 'EDSA, Diliman, Quezon City\n', 'NIA', 'National Irrigation Administration', 'EDSA, Diliman, Quezon City\n', 'Engr. EDUARDO EDDIE G. GUILLEN\nNIA Acting Administrator', 'Telfax.: (02) 8921-3741; 8929-6071 to 79, local 113, 119; 8922-2795; 8926-4510; 8926-4508\nFax: 8926-2846', 'pais@nia.gov.ph; niapais@gmail.com; contact-us@nia.gov.ph', 'Attached Agencies'),
(186, 'NCR', 'Scout Reyes Street, corner Panay Ave, Quezon City, Metro Manila', 'NTA', 'National Tobacco Administration', 'Scout Reyes Street, corner Panay Ave, Quezon City, Metro Manila', 'BELINDA SARMIENTO-SANCHEZ\nAdministrator and CEO', '(02) 8374-3987\n(02) 8374-2505', '\nntarecords@yahoo.com.ph', 'Attached Agencies'),
(187, 'NCR', 'Quezon City, Metro Manila', 'PCA ', 'Philippine Coconut Authority ', 'Quezon City, Metro Manila', 'BERNIE F. CRUZ\nAdministrator and CEO', 'DL(02) 8927-8706; 8927-8116; 8921-3387\nLocal 203, 205, 206', 'ofad@pca.gov.ph\npca.ofad@gmail.com', 'Attached Agencies'),
(188, 'NCR', '2nd Flr. PCA Annex Bldg. 1\nElliptical Rd., Diliman, Q.C.', 'PFDA', 'Philippine Fisheries Development Authority ', '2nd Flr. PCA Annex Bldg. 1\nElliptical Rd., Diliman, Q.C.', 'ATTY. GLEN A. PANGAPALAN\nActing General Manager', '8925-6141', 'pid@pfda.gov.ph\nogm@pfda.gov.ph', 'Attached Agencies'),
(189, 'NCR', 'M23V+8CM, VASRA, North Avenue, Diliman Quezon City Philippines, North Ave, Diliman, Lungsod Quezon', 'SRA', 'Sugar Regulatory Administration ', 'M23V+8CM, VASRA, North Avenue, Diliman Quezon City Philippines, North Ave, Diliman, Lungsod Quezon', 'PABLO LUIS S. AZCONA\nAdministrator and CEO\n', '(632) 8926-2928 / (632) 8929-3633', 'srahead@sra.gov.ph', 'Attached Agencies'),
(190, 'NCR', '3/F, Boncodin Hall, Gen. Solano St., San Miguel, Manila\nloc. 2325, 2326, 2691; 8735-1778 TF', 'DBM', 'Budget and Management Bureau-C', '3/F, Boncodin Hall, Gen. Solano St., San Miguel, Manila\nloc. 2325, 2326, 2691; 8735-1778 TF', 'Dir. ELENA REGINA S. BRILLANTES\nDirector', 'Telefax: (02) 8735-1778\nLocals 2325, 2326, 2691', 'ebrillantes@dbm.gov.ph', 'Attached Agencies'),
(191, 'NCR', 'Taguig City', 'FNRI-DOST', 'Food and Nutrition Research Institute- Department of Science and Technology', 'Taguig City', 'Dr. IMELDA ANGELES-AGDEPPA\nScientist IV\nDirector IV', 'Tel No: (02) 8837-8113/8114 local 301 or (02) 8839-1839 or (02) 8837-2934\nTelefax No: (02) 8837-2934', 'iaa@fnri.dost.gov.ph; \niangelesagdeppa@yahoo.com.ph;', 'Attached Agencies'),
(192, 'NCR', 'Pasig City', 'NEDA', 'National Economic and Development Authority', 'Pasig City', 'Sec. ARSENIO M. BALISACAN\nDirector General and Socioeconomic Planning Secretary', 'Tel: (02) 8631-3716; 8631-3723; 631-0945 to 68\nFax: (02) 8631-3747\n', 'osec@neda.gov.ph; nedapr@neda.gov.ph', 'Attached Agencies'),
(193, 'NCR', 'Quezon City', 'PAGASA-DOST', 'Philippine Atmospheric, Geophysical and Astronomical Services Administration', 'Quezon City', 'Dr. NATHANIEL T. SERVANDO\nOfficer-in-Charge, Administrator', 'Tel: (02) 8929-4865; 8434-9040; 434-9026\nTrunkline: (02) 8284-0800 loc 102-403\nFax: (02) 929-4865', 'ao@pagasa.dost.gov.ph\nntservando@pagasa.dost.gov.ph\nservandomet2013@gmail.com', 'Attached Agencies'),
(194, '4-A', 'Laguna', 'PCAARRD', 'Philippine Council for Agriculture, Aquatic and Natural Resources Research and Development', 'Laguna', 'Dr. Reynaldo V. Ebora\nExecutive Director', 'One Pilot Number: (049) 554-9670\nManila Line: (02) 8779-5680\nDirect Line: (049) 536-4990\nFax: (049) 536-7922', 'pcaarrd@pcaarrd.dost.gov.ph; rvebora@gmail.com;\nr.ebora@pcaarrd.dost.gov.ph', 'Attached Agencies'),
(195, 'NCR', 'Quezon City', 'PCIC', 'Philippine Crop Insurance Corporation', 'Quezon City', 'Atty. JOVY C. BERNABE\nPresident', 'Tel: (02) 8533-4466; 8441-0667\nTelefax: (044) 441-1326, 441-1323', 'op@pcic.gov.ph', 'Attached Agencies'),
(196, 'NCR', 'Quezon City', 'PNRI-DOST', 'Philippine Nuclear Research Institute', 'Quezon City', 'Dr. CARLO A. ARCILLA\nDirecior', 'Trunkline: (02) 8929-6010 to 19\nTel.: Secretary, OD - (02) 8929-6011, local 287\nDirect Line: (02) 8920-8738\nMain Fax No.: (02) 8920-1646', 'caarcilla@pnri.dost.gov.ph?', 'Attached Agencies'),
(197, 'CAR', '', '', 'Regional and Baguio City 4H Club', '', 'Ryan U. Palunan', '0927-298-7762', 'ryanpalunan@gmail.com', 'Regional AFCs '),
(198, 'Region I', '', '', 'Buduan Livestock Raisers', '', 'Benjamin Campa?ano', '9175701790', 'agriculture_ilocosnorte@yahoo.com\n nblagmay@yahoo.com', 'Regional AFCs '),
(199, 'Region II', '', '', 'PHILMAZE/P4MP', '', 'Dante B. Tobias', '0908-446-9033', 'tobiasdante@gmail.com/ opag.quirino@yahoo.com', 'Regional AFCs '),
(200, 'Region III', '', '', 'Pastol MPC', '', 'Engr. Francisco Hernandez', '9055130212\n0908-873-5701', 'boyah829@yahoo.com', 'Regional AFCs '),
(201, 'Region IV-A', '', '', 'Unified Batangas Hog Raiser Inc', '', 'Pedrito Kalaw', '9175048778', 'prk877@gmail.com', 'Regional AFCs '),
(202, 'Region IV-B', '', '', 'Seed Producers Coop. of Occ. Mindoro', '', 'Alfonso Esguera', '9201012181', 'esguerraalfie@gmail.com', 'Regional AFCs '),
(203, 'Region V', '', '', 'Bidibidi Enterprises', '', 'Bernadette Delos Santos', '9493561590', 'bidibidi101@gmail.com', 'Regional AFCs '),
(204, 'Region VI', '', '', 'Regional Cacao Council/ POPA Agricultural Cooperative', '', 'Buen S. Mondejar', '9998803022', 'rafc6@yahoo.com\npopa.cooperative@gmail.com', 'Regional AFCs '),
(205, 'Region VII', '', '', 'Negros Island Sustainable Agriculture and Rural Development Foundation Inc.', '', 'William V. Abay', '9158946663', 'will.abay@gmail.com', 'Regional AFCs '),
(206, 'Region VIII', '', '', 'Magsasaka Siyentista Region 8', '', 'Miguel A. Pedroso', '9276403728', 'migaped@yahoo.com', 'Regional AFCs '),
(207, 'Region IX', '', '', 'Kumalarang Irrigators Association', '', 'Leonardo P. Caparida', '9214944515', 'leunardz09@gmail.com\nrafda9@gmail.com', 'Regional AFCs '),
(208, 'Region X', '', '', 'ASFARNET', '', 'Reynaldo M. Cabanao', '9166716828', 'asfarnetphils@yahoo.com', 'Regional AFCs '),
(209, 'Region XI', '', '', 'Vegetable Industry Council of Souther Mindanao', '', 'Allan G. Macansantos', '9282654161', 'macansantos.allan@yahoo.com', 'Regional AFCs '),
(210, 'Region XII', '', '', 'Mua-an Multipurpose Cooperative', '', 'Angel Cervantes, Jr.', '9178424081', 'rcconsultancy1626@gmail.com', 'Regional AFCs '),
(211, 'CARAGA', '', '', 'Caraga Cacao Organization, Inc', '', 'Christopher Lindo', '9177060600', 'chrizlindo24@gmail.com', 'Regional AFCs '),
(212, 'BARMM', '', '', 'Provincial Farmer Association of Maguindanao', '', 'Dr. Salik B. Panalunsong', '9569768503', 'sarahmasianggal0920@gmail.com', 'Regional AFCs '),
(213, 'CAR', 'Benguet', 'CIARC', 'Cordillera Integrated Agricultural Research Center', 'Bokawkan, BPI Compound, Guisad 2600 Baguio City ', 'Dr. Magdalena T. Wanawan\nManager', 'Telefax: (074) 445-8986; 444-5144', 'da_ciarc@yahoo.com', 'Regional Consortia'),
(214, '1', 'Ilocos Norte', 'INREC', 'Ilocos Norte Research and Experiment Center', 'Ilocos Norte Provincial Center, Tabug, Batac City, 2906 Ilocos Norte', 'Ms. Cathy B. Pastor\nHead, Research Division\n\nGilbert D. Rabara, DVM\nChief SRS, Research Division', 'Tel: (077) 792-3860; 792-4468', 'inpcenter@yahoo.com.ph;\ninrec1234@gmail.com', 'Regional Consortia'),
(215, '1', 'La Union', 'ILIARC', 'Ilocos Integrated Agricultural Research Center', 'DMMMSU Compound, Bacnotan, La Union', 'Dr. Jovita M. Datuin \nCenter Manager', 'Tel: (072) 719-0188-91\nTelefax: (072) 682-2472 or (072)719-0189', 'da1iliarc@yahoo.com', 'Regional Consortia'),
(216, '2', 'Batanes', 'BES', 'Batanes Experiment Station', 'Basco, Batanes', 'Dr. Richard Q. Padayuman  \nOfficer-in-Charge Station Chief', '0928-844-5749', 'da_iaros@yahoo.com;\nbes.rfo2@da.gov.ph        ', 'Regional Consortia'),
(217, '2', 'Cagayan', 'SCRC', 'Southern Cagayan Research Center (formerly CVLMROS)', 'Minanga Norte, Iguig, 3504 Cagayan', 'Ms. Norma A. Nerona\nOIC, Center Chief', 'Tel: (078) 501-0889', 'scrc.rfo2@da.gov.ph\nscrc_cvlmros_apc@yahoo.com', 'Regional Consortia'),
(218, '2', 'Isabela', 'CVRC', 'Cagayan Valley Research Center (formerly CVIARC)', 'San Felipe, Ilagan City, 3300 Isabela', 'Engr. Rolando D. Pedro\nCenter Chief', 'Tel: (078) 622-3113, 622-3227, (0917)690-6181\nTelefax: (078) 846-3749\nFax: (078) 846-2526; 622-0961', 'cvrc.rfo2@da.gov.ph', 'Regional Consortia'),
(219, '2', 'Cagayan', 'NCES', 'Northern Cagayan Experiment Station', 'Abulug, Cagayan', 'Dr. Marilou B. Agaid\nCenter Manager', '', 'nces.rfo2@da.gov.ph\ndances2017@yahoo.com', 'Regional Consortia'),
(220, '2', 'Nueva Vizcaya', 'NVES', 'Nueva Vizcaya Experiment Station', 'Tapaya, Bagabag, Nueva Vizcaya', 'Mr. Arsenio M. Apostol, Jr.\nStation Chief', 'Cel: 0916 439 7442', 'nves.rfo2@da.gov.ph; \ncvhrfits@yahoo.com.ph', 'Regional Consortia'),
(221, '2', 'Quirino', 'QES', 'Quirino Experiment Station', 'Dungo, Aglipay, Quirino', 'Engr. Fidelino R. Cabantac\nOIC-Station Chief', 'Cel: 0915 597 0274', 'qes.rfo2@da.gov.ph', 'Regional Consortia'),
(222, '3', 'Pampanga', 'CLIARC', 'Central Luzon Integrated Agricultural Research Center ', 'Sto. Nino, Magalang, 2011 Pampanga', 'Dr. Irene M. Adion \nCenter Manager\nChief, Research Division', 'Tel: (045) 963-5428; 865-1668; 985-1256\nFax: (045) 961-3336', 'darfu3cliarc@gmail.com\nvet_ireneadion@yahoo.com;\nresearch_da3@gmail.com', 'Regional Consortia'),
(223, '3', 'Tarlac', 'CLIARC-ROS', 'Central Luzon Integrated Agricultural Research Center-Research Outreach Station', 'Paraiso, Tarlac City, Tarlac', 'Dr. Ronald M. Angat\nStation Manager', 'Mobile: 0918-230-8237; 0912-322-7419 or thru DA-CLIARC Magalang', 'darfu3cliarc@gmail.com \n(same as CLIARC Magalang)', 'Regional Consortia'),
(224, '4-A', 'Batangas', 'STIARC', 'Southern Tagalog Integrated Agricultural Research Center', 'Marawoy, Lipa City, Batangas', 'Ms. Digna S. Narvacan\nCenter Manager', 'Telefax.: (043) 756-4962; 756-2521\nFax: (043)756-4962\nMobile: (0919) 342-4830', 'digsnarvacan@yahoo.com', 'Regional Consortia'),
(225, '4-B', 'Batangas', 'STIARC', 'Southern Tagalog Integrated Agricultural Research Center', 'Lipa City, Batangas', 'Ms. Marissa Luna\nOIC-Manager', 'Phone: (043)756-2521\nFax: (043)756-4962', 'damimaropa_research@yahoo.com', 'Regional Consortia'),
(226, '4-B', 'Oriental Mindoro', 'OrMAES', 'Oriental Mindoro Agricultural Experiment Station', 'Barcenaga, Naujan, 5204 Oriental Mindoro', 'Dr. Jovelito D. Landicho\nDA-RIARC Center Chief -MIMAROPA', 'Tel: (043) 286-7548 (APCO)\n\n0915 458 2158', 'mimaropa@mail.da.gov.ph\npres.mimaropa@gmail.com\n', 'Regional Consortia'),
(227, '4-B', 'Palawan', 'PRES', 'Palawan Research and Experiment Station ', 'Sta. Monica, 5300 Puerto Princesa City, Palawan', 'Ms. Milagros Cacal\nStation Head', 'Tel: (048) 433-4373, -2788; 434-2286\nFax No. 434 ? 4047', 'pres.mimaropa@gmail.com\npaes.research@gmail.com', 'Regional Consortia'),
(228, '5', 'Camarines Sur', 'BIARC', 'Bicol Integrated Agricultural Research Center', 'San Agustin, Pili, 4418 Camarines Sur', 'Ms. Luz R. Marcelino\nRTD for Operations and Extensions, DA Region V, &\nCenter Manager', 'Tel: (054) 477-3506; 477-0475\n Fax: (054) 477-3377\nTelefax: (054) 477-7266; (054) 361-1944', 'luzcelinomar@yahoo.com; bicolresearch@yahoo.com; darfu5operations@yahoo.com', 'Regional Consortia'),
(229, '5', 'Sorsogon', 'SOS', 'Sorsogon Outreach Station', 'Sorsogon City, 4700 Sorsogon', 'Pedro F. Oliver \nResearcher ', 'Fax: (054) 361-1690\n09682913108', 'https://www.facebook.com/RDPTCSorsogon/about', 'Regional Consortia'),
(230, '6', 'Iloilo', 'CROS', 'Capiz Research Outreach Station', 'Malapad Cogon, Sigma, Capiz', 'Ms. Lilia D. Pe?aranda\nCenter Head', 'Mobile: 0919-211-7988', 'da6capizros@gmail.com', 'Regional Consortia'),
(231, '6', 'Iloilo', 'WESVIARC', 'Western Visayas Integrated Agricultural Research Center ', 'Hamungaya, Jaro, 5000 Iloilo City, Iloilo', 'Engr. Jackson Demamay\nDivision Chief\n\nDR. PETER S. SOBUEVEGA (Manager)\nEmail : petersobuevega@yahoo.com\nPhone: (033)329-6210\nFax: (033)329-0956', 'Telefax: (033) 329-6905; 329-6210; 329-0956\nMobile: 0912-520-0158, 0918-760-2217', 'darfo6wesviarc@gmail.com', 'Regional Consortia'),
(232, '6', 'Negros Occidental', 'BPI-LGNCRDPSC', 'BPI-La Granja National Crops Research, Development and Production Support Center', 'La Granja, La Carlota City, 6310 Negros Occidental', 'Doris Paz I. Discaya \nOffice-in-Charge, Center Manager\n\nJennifer L. Ferrer\nContact Person', 'Telefax: (034) 735-0088; 735-9226\nMobile: 0912-510-4236; 0998-549-5935; 0917-105-9389', 'lgncrdc_lagranja@yahoo.com; bpi.lagranja.ncrdc@gmail.com', 'Regional Consortia'),
(233, '7', 'Cebu', 'CENVIARC', 'Central Visayas Integrated Agricultural Research Center', 'M. Velez St., 6000 Cebu City, Cebu', 'Dr. Fabio G. Enriquez\nCenter Manager', 'Tel: (053) 321-3154\nFax: (053) 321-3043\nTelefax: (032) 256-3436\nMobile: 0918-515-7978', 'cenviarc@yahoo.com;\nvicarp_lsu@yahoo.com \nvicarp.region8@gmail.com', 'Regional Consortia'),
(234, '7', 'Bohol', 'CENVIARC-SWRDS', 'Central Visayas Integrated Agricultural Research Center-Soil Water Research and Demonstration Station ', 'Calanggaman, Ubay, 6315 Bohol', 'Ms. Daisy O. Cartagenas\nCenter Chief\n', 'Tel: (038) 510-6422; 518-0304; 518-0270; Mobile: 0920-557-5761; 0906-795-1767', '', 'Regional Consortia'),
(235, '7', 'Bohol', 'CENVIARC-BES', 'Central Visayas Integrated Agricultural Research Center-Bohol Experiment Station', 'Gabi, Ubay, 6315 Bohol', 'Dr. Fernando S. Doroy\nCenter Chief', 'Telefax: (038) 518-0304, 518-0270\nMobile: 0977-783-5048', '', 'Regional Consortia'),
(236, '7', 'Bohol', 'Bohol APC ', 'Bohol Agricultural Promotion Center ', 'Dao, 6300 Tagbilaran City, Bohol', 'Mr. Felix N. Tubiano\nStation Head ', '(038) 411 2436\nMobile: \n0905-2609099; 0966-177-3142\nTel: (038) 411-2436, 411-4136; (038) 501-7538\nFax: 501-7538\nFB Account: https://www.facebook.com/daboholapc/', 'boholapc@gmail.com\njakemadrio2004@yahoo.com\n', 'Regional Consortia'),
(237, '8', 'Leyte', 'EVIARC', 'Eastern Visayas Integrated Agricultural Research Center', 'Brgy. Bagong Silang, Babatngon, Leyte', 'Dr. Elvira C. Torres\nCenter Manager', 'Regional Office Tel: (053) 321-3154; Fax: (053) 321-3043; Mobile: 0926-268-1214    ', 'lvctorres@gmail.com\nortd.research@gmail.com', 'Regional Consortia'),
(238, '8', 'Leyte', 'EVIARC-ROS', 'Eastern Visayas Integrated Agricultural Research Center-Research Outreach Station ', 'Brgy. Bagong Silang, Babatngon, Leyte', 'Dr. Leonarda Londina\nOIC-Chief Research Division', 'Tel: (053) 321-3154; Fax: (053) 321-3043; Mobile: 0918-515-7978', 'da8resdiv@gmail.com', 'Regional Consortia'),
(239, '8', 'Leyte', 'EVIARC-ROS', 'Eastern Visayas Integrated Agricultural Research Center-Research Outreach Station ', 'Balinsasayao, Abuyog, 6510 Leyte', 'Mr. Jimmy C. Palma\nOIC Superintendent', 'Regional Office Tel: (053) 321-3154; Fax: (053) 321-3043; Mobile: 0926-268-1214    ', '', 'Regional Consortia'),
(240, '8', 'Northern Samar', 'EVIARC-ROS', 'Eastern Visayas Integrated Agricultural\nResearch Center-Research Outreach Station ', 'Irawahan, Catubig, 6418 Northern Samar', 'Mr. Melvin Jumadiao\nSuperintendent', 'Reg. Office Tel: (053) 321-3154; Fax: 321-3043  ', '', 'Regional Consortia'),
(241, '8', 'Western Samar', 'EVIARC-ROS', 'Eastern Visayas Integrated Agricultural Research Center-Research Outreach Station ', 'Sapinit, San Jorge, 6707 Western Samar', 'Dr. Francisco T. Dayap\nStation Superintendent', 'Reg. Office Tel: (053) 321-3154 Fax: 321-3043; Mobile: 0906-571-6770', '', 'Regional Consortia'),
(242, '9', 'Zamboanga Sibugay', 'ZAMPIARC', 'Zamboanga Peninsula Integrated Agricultural Research Center ', 'Sanito, Ipil, 7001 Zamboanga Sibugay', 'Engr. Roger O. Bagaforo\nCenter Manager', 'Telefax: (062) 333-2537\nFax: (062) 333-2877\n\n', 'robagaforo@yahoo.com; da_zampiarc@yahoo.com.ph', 'Regional Consortia'),
(243, '9', 'Zamboanga Sur', 'ZAMPIARC-ROS', 'Zamboanga Peninsula Integrated Agricultural Research Center -Betinan Research Outreach Station', 'Betinan, San Miguel, 7029 Zamboanga del Sur', 'Ms. Prescilla C. Hover\nSuperintendent ', 'Tel: (062) 333-2537; Mobile: 0918-741-4235 ', '', 'Regional Consortia'),
(244, '10', 'Bukidnon', 'BAPC', 'Bukidnon Agricultural Productivity Center', 'Barongcot, Dangcagan, Bukidnon', 'Mr. Rufino T. Busig\nAgricultural Center Chief', 'Telefax: (088) 357-1031', '', 'Regional Consortia'),
(245, '10', 'Bukidnon', 'NOMIARC', 'Northern Mindanao Integrated Agricultural Research Center', 'Dalwangan, Malaybalay City               8719 Bukidnon', 'Ms. Juanita B. Salvani\nCenter Manager', 'Tel: (088) 230-3145\nMobile: 0920-901-8521', 'juanitasalvani@gmail.com', 'Regional Consortia'),
(246, '11', 'Davao del Sur', 'SMIARC', 'Southern Mindanao Integrated Agricultural Research Center', 'Bago Oshiro, 8000 Davao City, Davao', 'Mr. Juanito C. Lubipa\nManager', 'Telefax: (082) 293-0109, 293-0136\nFax: (082) 293-0109\nCel: 0917-701-2955', 'dasmiarc@yahoo.com', 'Regional Consortia'),
(247, '12', 'Cotabato', 'CEMIARC', 'Central Mindanao Integrated Agricultural Research Center', 'Amas, Kidapawan City, Cotabato', 'Ms. Lorna P. Vilbar\nManager\n', 'Tel: (064) 278-7036; 288-5350\nFax: (064) 421-3789\nMobile: 0929-400-9143; 0906-659-3447', 'lornavilbar@yahoo.com', 'Regional Consortia'),
(248, '12', 'South Cotabato', 'CEMIARC-ROS', 'Central Mindanao Integrated Agricultural Research Center-Research Outreach Station', 'Bololmala, Tupi, 9505 South Cotabato ', 'Ms. Aileen V. Alvarez\nStation Chief', 'Telefax: (083) 226-2805\nCel: 0912-170-4683', 'darestupi@gmail.com', 'Regional Consortia'),
(249, '12', 'Sultan Kudarat', 'CEMIARC-ROS', 'DA-Central Mindanao Integrated Agricultural Research Center-Research Outreach Station', 'Bo. 2, Tacurong City, 9800 Sultan Kudarat', 'Mr. Chito L. Dela Cruz \nStation Chief', 'Tel: (064) 200-5064; 200-4267\nCel: 0930-570-2264', 'amasresearch28@gmail.com', 'Regional Consortia'),
(250, '12', 'Maguindanao', 'ARMMIARC', 'Autonomous Region in Muslim Mindanao Integrated Agricultural Research Center', 'ORG Compound, 9600 Cotabato City, Maguindanao', 'Mr. Tong A. Abas\nCenter Manager', 'Tel: (064) 429-0061; Fax: (064) 421-1234', 'dafarmmiarc@gmail.com', 'Regional Consortia'),
(251, 'Caraga', 'Agusan del Sur', 'CARIARC', 'CARAGA Integrated Agricultural Research Center', 'Trento, Agusan del Sur', 'Mr. Wilfreda Manos\nManager', 'Phone: (085)255-2325', 'wmmaslog@yahoo.com', 'Regional Consortia'),
(252, 'Caraga', 'Agusan del Sur', 'CARIARC-ROS', 'Caraga Integrated Agricultural Research Center', ' Trento, 8505 Agusan del Sur', 'Mr. Escolastico Cagatin \nCenter Chief, RES Trento, Agusan del Sur', 'Tel: (085) 255-2325', 'trentores13@gmail.com', 'Regional Consortia'),
(253, 'Caraga', 'Agusan del Sur', 'CARIARC', 'Caraga Integrated Agricultural Research Center-Research Outreach Station', 'Del Monte, Talacogon, 8510 Agusan del Sur', 'Ms. Catherine B. Juyno\nCenter Chief, RES Del Monte, Talacogon, Agusan del Sur', 'Tel: (085) 341-2114, 225-5204', 'delmonteres13@gmail.com', 'Regional Consortia'),
(254, 'CAR', 'Abra', 'LGU-Abra', 'LGU-Abra', 'Provincial Capitol, 2800 Bangued, Abra\n', 'Gov. Dominic B. Valera', 'Tel: (074) 752-8442\nFax: (074) 752-7857\nOPAg: (074) 752-5390; 0906-829-7826', 'abragovernorofc@gmail.com', 'LGUs'),
(255, 'CAR', 'Apayao', 'LGU-Apayao ', 'LGU-Apayao', 'Provincial Capitol\n3809 Kabugao, Apayao', 'Gov. ELIAS C. BULUT JR.', 'Tel: (078) 824-8578; (074) 422-2004\nCell: (0995) 4758363\n(0918) 3529746; 0916 190 8338; 0938-630-4233; 0965-768-3434\nOPAg: 0977-803-0218', 'psilverian@yahoo.com; \ngovbutzy.apayao22@gmail.com\n', 'LGUs'),
(256, 'CAR', 'Benguet', 'LGU-Benguet', 'LGU-Benguet', 'Provincial Capitol\n2601 La Trinidad, Benguet', 'Gov. MELCHOR D. DICLAS', 'Tel: (074) 422-2004/2609; 422-2132 (PA)\nFax: (074) 422-2004\nOPAg: (074) 422-2306; (074) 422-6555; 0920-892-8156; (074) 422-4124', 'benguet.governor@gmail.com; \ndiclasmelchor@gmail.com;\nagriculturebenguet@benguet.gov.ph', 'LGUs'),
(257, 'CAR', 'Ifugao', 'LGU-Ifugao', 'LGU- Ifugao', 'Provincial Capitol\n3600 Lagawe, Ifugao', 'Gov. JERRY U. DALIPOG', 'Telefax: (074) 382-2108\nOPAg: 0917-513-5150;\n0935-520-6765;\n0999-996-5322\n0995-303-6510', 'jerrydalipog@gmail.com;\npgocapitol2019@gmail.com;\npaenro_ifugao@yahoo.com;', 'LGUs'),
(258, 'CAR', 'Kalinga', 'LGU-Kalinga', 'LGU-Kalinga', 'Provincial Capitol\n3800 Tabuk, Kalinga\n', 'Gov. JAMES EDDUBA', 'Tel: 0918-918-6185;  0929 449 7719', 'e.a.pgo.kalinga@gmail.com;\nopaskalinga@yahoo.com; \nkalingapgo@gmail.com', 'LGUs'),
(259, 'CAR', 'Mountain Province', 'LGU-Mt. Province', 'LGU-Mt. Province', 'Provincial Capitol\n2616 Bontoc, Mt. Province', 'Gov. Bonifacio C. Lacwasan Jr.', 'Telefax: (074) 462-4310\nOPAg: (074) 462-4208; 0998-985-7585; 0938 358 5099', 'mpgov@yahoo.com;\njovie_camso@yahoo.com;\n opagbontoc@yahoo.com', 'LGUs'),
(260, '1', 'Ilocos Norte', 'LGU-Ilocos Norte', 'LGU-Ilocos Norte', 'Provincial Capitol,\n2900 Laoag City, Ilocos Norte\n', 'Gov. MATTHEW JOSEPH MARCOS MANOTOC', 'Tel: (077) 600-2950 to 51; (077) 770-3966; (077) 772-1211 \nFax: (077) 772-1772, (077) 770-3966\nOPAg: (077) 770-4237; 0928-796-8460', 'pgindts@gmail.com; pgindts@ilocosnorte.gov.ph\nagriculture_ilocosnorte@yahoo.com', 'LGUs'),
(261, '1', 'Ilocos Sur', 'LGU-Ilocos Sur', 'LGU-Ilocos Sur', 'Provincial Capitol\n2700 Vigan, Ilocos Sur', 'Gov. JEREMIAS "JERRY" C. SINGSON', 'Tel: (077) 722-2776; (PA) 722-2746\nFax: (077) 722-2776; Provincial Administrator: +63 917 512 7926\nOPAg: (077) 722-8159; 0917-173-5475\n0917-8240458', 'opag.isur@gmail.com; opagisur@gmail.com', 'LGUs'),
(262, '1', 'La Union', 'LGU-La Union', 'LGU-La Union', 'Provincial Capitol\n2500 San Fernando, La Union', 'Gov. RAPHAELLE VERONICA A. ORTEGA-DAVID', 'Tel: (072) 888-3608; 888-6035; (072) 242-5550; 888-6035; 888-3608; 888-4453\nCel: 0961-972-4804\nFax: (072) 888-4453\nOPAg: (072) 888-4454; 888-3608', 'opaglaunion@yahoo.com;\ngovpacoy@launion.gov.ph; info@launion.gov.ph', 'LGUs'),
(263, '1', 'Pangasinan', 'LGU-Pangasinan', 'LGU-Pangasinan', 'Provincial Capitol\n2401 Lingayen, Pangasinan', 'Gov. Ramon V. Guico III', 'Tel: (075) 542-2368\nFax: (075) 542-2368\nOPAg: (075) 696-0033; 523-2703; 0921-565-5430; 0939-435-8565; 527-2703; 615-4099', 'Provincial Administrator: atty.nscamba@gmail.com; \nPAO: opagpang@yahoo.com; opagpang@gmail.com', 'LGUs'),
(264, '2', 'Cagayan', 'LGU-Cagayan', 'LGU-Cagayan', 'Provincial Capitol\n3500 Tuguegarao, Cagayan', 'Gov. Manuel N. Mamba, M.D.', 'Tel: (078) 304-0083; 377-0949; (078) 304-4048; (078) 304-4048\nFax:  304-2293\nGov: 0995-600-6648;\nOPAg: 0906-707-0703; \n0927-327-3538; 304-1293; 0917-874-0739', 'gov.mamba@gmail.com; ppmiucagayan@gmail.com; 2025cagayanpio@gmail.com; OPACAGAYAN02@gmail.com', 'LGUs'),
(265, '2', 'Isabela', 'LGU-Isabela', 'LGU-Isabela', 'Provincial Capitol\n3300 Ilagan, Isabela', 'Gov. RODOLFO T. ALBANO III', 'Tel.: (078) 323-2536; 323-0369; 323-0173\nFax: (078) 323-0369; (078) 622-0955\nGov: 0978-323-0369;\nOPAg: (078) 323-0373 \n0917-801-7384/0922-844-1432', 'pgi_isabela@rocketmail.com; governorsofficeisabela@gmail.com; opa_isabela@yahoo.com', 'LGUs'),
(266, '2', 'Quirino', 'LGU-Quirino', 'LGU-Quirino', 'Provincial Capitol\n3400 Cabarroguis, Quirino', 'Gov. DAKILA CARLO E. CUA', 'Tel.: (078) 692-5068\nFax: (078) 692-5068; (02) 633-2118; (078)692-5088; 692-5068\nGov: 0917-572-1358\nOPAg: (078) 692-5040; 0916-337-7872; \n0916-920-1110', 'pgo.quirino@gmail.com; opagquirino@yahoo.com', 'LGUs'),
(267, '2', 'Nueva Vizcaya', 'LGU-Nueva Vizcaya', 'LGU-Nueva Vizcaya', 'Provincial Capitol\n3700 Bayombong, Nueva Vizcaya', 'Gov. JOSE V. GAMBITO', 'Tel: (078) 326-5474; (078) 805-7955; (078) 692-5088\nCel: 0917-599-0472\nFax: (078) 326-5474; 392-2288; (078) 321-2758\nOPAg: (078) 392-0794; 0915-5491622', 'governor@nuevavizcaya.gov.ph;\nopa.nuevavizcaya@gmail.com; \nopag_nv@yahoo.com', 'LGUs'),
(268, '3', 'Nueva Ecija', 'LGU-Nueva Ecija', 'Office of the Governor', 'Provincial Capitol\n3132 Palayan City, Nueva Ecija', 'Gov. AURELIO M. UMALI', 'Tel: (044) 940-1899; (02) 470-6933; 940-5058\nFax: (044) 940-1877; (02) 470-6933\nOPAg: 0920-981-5339; 0917-826-4814\n', 'nuevaecija.gov@gmail.com; opanuevaecija2018@gmail.com; nepg_gov@yahoo.com', 'LGUs'),
(269, '3', 'Pampanga', 'LGU-Pampanga', 'LGU-Pampanga', 'Provincial Capitol\n2000 San Fernando, Pampanga', 'Gov. DENNIS GARCIA PINEDA', 'Tel: (045) 961-1755; 961-3388 loc 208; 435-7796; 435-2577 \nFax: (045) 961-1755\nOPAg: (045) 636-4668; 455-4400; 0932-871-6348;\nCel: 0923-749-6995', 'opapampanga_rice75@yahoo.com;\ngdeltadennis.pineda@gmail.com; Opa_tits_pampanga@yahoo.com; govdeltadennis.pineda@gmail.com', 'LGUs'),
(270, '3', 'Zambales', 'LGU-Zambales', 'LGU-Zambales', 'Provincial Capitol, 2201 Iba, Zambales', 'Gov. HERMOGENES E. EBDANE JR.', 'Tel: (047) 811-7956; 811-3228 loc 122\nFax: (047) 811-7957; 811-7218\nOPAg: 0948-855-7330', 'crisrabaca12@gmail.com\nppdo_zambales@yahoo.com; opa_zambales@yahoo.com; admin@zambalesforthepeople.com; agrizambales2017@gmail.com', 'LGUs'),
(271, '3', 'Bataan', 'LGU-Bataan', 'LGU-Bataan', 'Provincial Capitol, San Jose\n2100 Balanga, Bataan', 'Gov. JOSE ENRIQUE S. GARCIA III', 'Tel: (047) 237-5540; 237-2413\nFax: (047) 237-1058\nOPAg: (047) 237-9785; 237-5767; \nCel: 0947-994-8018; 0917-380-0176', 'idi0519@yahoo.com; agri@bataan.gov.ph', 'LGUs'),
(272, '3', 'Bulacan', 'LGU-Bulacan', 'LGU-Bulacan', 'Provincial Capitol\n3000 Malolos, Bulacan', 'Gov. DANIEL R. FERNANDO', 'Tel: (044) 791-8148 to 8179; 791-8150\nFax: (044) 794-3617; 791-8141\nOPAg: (044) 791-8131; 791-0018; 791-0008; 0917-826-5317; 0917-812-4517', 'governor.danielfernando@bulacan.gov.ph; gops@bulacan.gov.ph; atty.nikki.coronel@bulacan.gov.ph; go.personalstaff@bulacan.gov.ph; jayric.amil@bulacan.gov.ph; pao@bulacan.gov.ph; gloria.carrillo@bulacan.gov.ph\ngigisfc@yahoo.com', 'LGUs'),
(273, '3', 'Tarlac', 'LGU-Tarlac', 'LGU-Tarlac', 'Provincial Capitol\n2300 Tarlac, Tarlac', 'Gov. Susan A. Yap-Sulit', 'Tel: (045) 982-1234 loc.130; 925-9931; 982-1764\nFax: (045) 982-1234\nCel: +639999982597; +639176538551', 'opatarlac@gmail.com', 'LGUs'),
(274, '3', 'Aurora', 'LGU-Aurora', 'LGU-Aurora', 'Provincial Capitol, Brgy. Suklayin\n3200 Baler, Aurora', 'Gov. CHRISTIAN M. NOVERAS', 'Tel: (042) 209-4421; 209-4373; 0939-169-2881 (Arnold Rice Coordinator)\nCP: 0917-1580595 Len Rivera;\n0977-854-8369; 0939-1692881', 'opag.aurora@yahoo.com; aurora.opag@yahoo.com; info@aurora.gov.ph; auroragovernorsoffice@gmail.com', 'LGUs'),
(275, '4-A', 'Cavite', 'LGU-Cavite', 'LGU-Cavite', 'Provincial Capitol Building, Trece Martires City 4109 Cavite / OPA Compound, Brgy. San Agustin, Trece Martires City 4109', 'Gov. JUANITO VICTOR C. REMULLA', 'Tel: (046) 419-2311; 419-1919\nCP: 0917-301-9545\nFax: (046) 419- 2311\nOPAg: (046) 419-2503', 'ask@cavite.gov.ph; agriculture@cavite.gov.ph; agriculture.cavite@yahoo.com; opacavite@gmail.com; pcledo_cavite@yahoo.com; pgcpcledo@gmail.com', 'LGUs'),
(276, '4-A', 'Laguna', 'LGU-Laguna', 'LGU-Laguna', 'Provincial Capitol\n4009 Sta. Cruz, Laguna\n', 'Gov. RAMIL L. HERNANDEZ', 'Tel: (049) 501-6534; 501-3588; (049) 501-1101 to 03\nCel : 0920-998-0164\nFax: (049) 501-6534; 501-1024\nOPAg: (049) 501-5754-5; (049) 810-4037', 'pio@laguna.gov.ph; \nsocialmedia.laguna@gmail.com;\nmptobias2@gmail.com; ', 'LGUs'),
(277, '4-A', 'Quezon', 'LGU-Quezon', 'LGU-Quezon', 'Provincial Capitol\n4300 Lucena City, Quezon', 'Gov. ANGELINA D.L. TAN', 'Tel: (042) 373-6007; 373-6008; 373-6009\nCP: 09209562364; 09171635885\nFax: (042) 373-6009; 373-5850\nOPAg: (042) 797-0652;(042) 719-1002', 'gov.quezon@gmail.com; opa_quezon@yahoo.com; govdoktorahelentan@gmail.com; doktorahelentan@gmail.com', 'LGUs'),
(278, '4-A', 'Batangas', 'LGU-Batangas', 'LGU-Batangas', 'Provincial Capitol\n4200 Batangas City, Batangas', 'Gov. HERMILANDO I. MANDANAS', 'Tel: (043) 706-3044; 786-1288; 702-2509; 723-1905\nFax: (043) 702-2069; 723-1338\nProv. Agriculturist: 0917-180-9295; (043) 740-4980\nProvincial Information Office: (043) 723-4651', 'pao_batangas@yahoo.com', 'LGUs'),
(279, '4-A', 'Rizal', 'LGU-Rizal', '', 'Provincial Capitol, 1870 Antipolo City, Rizal', 'GOV. NINA RICCI A. YNARES', 'Tel: (02) 620-2410; 661-5158\nFax: (02) 620-2477\nTrunk Line: 8620-2400, local 5702/5704', 'provinceofrizal@yahoo.com; rizalpio@gmail.com; \nrizalagri2@gmail.com; \nbonirey122@gmail.com;\npafcrizal@yahoo.com', 'LGUs'),
(280, '4-B', 'Oriental Mindoro', 'LGU-Mindoro Or.', 'LGU-Mindoro Oriental', 'Provincial Capitol, Brgy. Camilmil,\n5200 Calapan, Oriental Mindoro', 'Gov. HUMERLITO A. DOLOR', 'Tel: (043) 286-7118; 286-2310\nFax: (043) 441-0896\nOPAg: (043) 288-2282; 286-7791; 286-7112; 286-2637; 286-2644', 'opagormindoro@gmail.com; orminpio@gmail.com', 'LGUs'),
(281, '4-B', 'Occidental Mindoro', 'LGU-Occ. Mindoro ', 'LGU-Occidental Mindoro ', 'Provincial Capitol\n5106 Mamburao, Occidental Mindoro', 'Gov. EDUARDO B. GADIANO', 'Tel:(043) 711-1898\nCP: 09556839120\nOPAg: 09154520188', 'govedoccmin@gmail.com; pgomainoffice@gmail.com; opamamburao2016@gmail.com\nelmer.velacruz@yahoo.com (assistant)', 'LGUs'),
(282, '4-B', 'Romblon', 'LGU-Romblon', 'LGU-Romblon', 'Provincial Capitol\n5500 Romblon, Romblon', 'Gov. JOSE R. RIANO', 'Mobile: (0999) 889-1499; 0917 837 2867; (042) 567-5235\nOPAg: (042) 567-5393; (042) 565-5795; 0929-676-9681', 'romblongovmla@gmail.com; govotikriano@gmail.com; dilgromblonpo@gmail.com; \ndionganopag@yahoo.com (Engr. Ramil M. Galicia-secretariat)', 'LGUs'),
(283, '4-B', 'Palawan', 'LGU-Palawan ', 'LGU-Palawan ', 'Ramon V. Miitra Building, Capitol Complex\n5300 Puerto Princesa City, Palawan', 'Gov. VICTORINO DENNIS M. SOCRATES', 'Tel: (048) 433-2987 TL/ 433-2983\n(048) 723-0590; (048) 433-2987-CEASAR SAMMY A. MAGBANUA (Chief of Staff)\nFax: (048) 433-2987 /434-9560\n(02) 8116037\nOPAg: (048) 433-2202; \n0905-288-4939', 'palawan.governor@gmail.com; provincial_agriculture@yahoo.com; piopalawan@gmail.com; pgpcomdep@gmail.com', 'LGUs'),
(284, '4-B', 'Marinduque', 'LGU-Marinduque', '', 'Provincial Capitol\n4900 Boac, Marinduque', 'Gov. PRESBITERO J. VELASCO JR.', 'Tel: (042) 332-1002; (042) 704-0144\nFax: (042) 332-1266\nOPAg: 0918-957-6493; (042) 332 1256', 'marinduqueprovincialgovt@gmail.com;\nprovincialagriculturistoffice@yahoo.com; agriduque@yahoo.com', 'LGUs'),
(285, '5', 'Camarines Norte', 'LGU-Camarines Norte', 'LGU-Camarines Norte', 'Provincial Capitol\n4600 Daet, Camarines Norte', 'Gov. RICARTE R. PADILLA', 'Tel: (054) 885-0225\nFax: (054) 885-0225\n(054) 441-5639\nOPAg: (054) 721-0291', 'opagcamnorte@yahoo.com; piocamsnorte@gmail.com; opagcamsnorte@gmail.com', 'LGUs'),
(286, '5', 'Camarines Sur', 'LGU-Camarines Sur', 'LGU-Camarines Sur', 'Provincial Capitol\n4418 Cadlan, Pili, Camarines Sur', 'Gov. Vicenzo Renato Luigi Villafuerte', 'Tel: (054) 477-3159 / 3172\nFax: (054) 477-3159', 'ricecamsur@gmail.com;  info@camarinessur.gov.ph', 'LGUs'),
(287, '5', 'Catanduanes', 'LGU-Catanduanes', 'LGU-Catanduanes', 'Provincial Capitol\n4800 Virac, Catanduanes', 'Gov. Joseph C. Cua', 'CP: 0999-999-8769; 0920-911-7441 (Lemuel P. Surtida)\nOPAg: 09495720956', 'opag2_catanduanes@yahoo.com; catgoinfo@gmail.com; kalemps@yahoo.com (Prov. Admin. Office)', 'LGUs'),
(288, '5', 'Sorsogon', 'LGU-Sorsogon', 'LGU-Sorsogon', 'Provincial Capitol\n4700 Sorsogon City, Sorsogon', 'Gov. JOSE EDWIN B. HAMOR', 'Cel: 09692338681; 09950283911\nOPAg: 0948 213 9522', 'opa.sorsogon@gmail.com; prov_admin@sorsogon.gov.ph; agriculturist@sorsogon.gov.ph; contact@sorsogon.gov.ph; governor@sorsogon.gov.ph', 'LGUs'),
(289, '5', 'Albay', 'LGU-Albay', 'LGU-Albay', 'Provincial Capitol\n4500 Legaspi City, Albay', 'Gov. EDCEL GRECO B. LAGMAN', 'Tel: (052) 742-6377; 742-6766\nFax: (052) 480-3444', 'albay.agri@gmail.com; pgasecretariat@gmail.com', 'LGUs'),
(290, '5', 'Masbate', 'LGU-Masbate', 'LGU-Masbate', 'Provincial Capitol\n5400 Masbate, Masbate', 'Gov. ANTONIO T. KHO', 'Tel: (056) 582-0874; 582-0977; 056-5785-234\nFax: (056) 582-0874\nOPAg: 09178918783', 'pao_masbate@yahoo.com; khoantoniot@gmail.com', 'LGUs'),
(291, '6', 'Aklan', 'LGU-Aklan', 'LGU-Aklan', 'Provincial Capitol\n5600 Kalibo, Aklan', 'Gov. JOSE ENRIQUE M. MIRAFLORES ', 'Tel: (036) 268-5338; (036) 272-7000 local 2700\nFax: (036) 262-3132\nOPAg: (036) 272-7000 local 6700', 'aklanpgo@yahoo.com;\nopaaklan@gmail.com; ', 'LGUs'),
(292, '6', 'Antique', 'LGU-Antique ', 'LGU-Antique ', 'Provincial Capitol\n5700 San Jose, Antique', 'Gov. RHODORA J. CADIAO', 'Tel: (036) 540-9649; 540-7740\nCel: 09275841278; 09178293954\nFax: (036) 540-9649\nOPAg: (036) 540-8419\nCel: 09177732582', 'gov.dododcadiao@yahoo.com; ncalawag@gmail.com / opa.antique@gmail.com', 'LGUs'),
(293, '6', 'Capiz', 'LGU-Capiz', 'LGU-Capiz', 'Provincial Capitol\n5800 Roxas City, Capiz', 'Gov. FREDENIL H. CASTRO', 'Tel: (036) 620-7523\nFax: 621-0932\nOPAg: (036) 621-0932', 'maygugmanamayaangapa@gmail.com; \nopa_capiz@yahoo.com', 'LGUs'),
(294, '6', 'Guimaras', '', '', '', 'Gov. JC RAHMAN A. NAVA, MD', 'Tel: (033) 581-2057; 237-1447; (033) 581-2114\nFax: (033) 581-2057\nOPAg: (033) 581-0012', 'public.information_guimaras@yahoo.com.ph; poas_guimaras22@yahoo.com', 'LGUs'),
(295, '6', 'Iloilo', 'LGU-Iloilo', 'LGU-Iloilo', 'Provincial Capitol\n5000 Iznart St., Iloilo City, Iloilo', 'Gov. ARTHUR R. DEFENSOR, JR.', 'Tel: (033) 337-1739; 336-8151\nFax: (033) 337-4230; 336-3669\nOPAg: (033) 328-7930/7900, local 130; telefax (033) 337-3062 ', 'art_defensor@yahoo.com, governor@iloilo.gov.ph, toto.defensor@iloilo.gov.ph; ilo_agriculture@yahoo.com.ph, agriculture@iloilo.gov.ph', 'LGUs'),
(296, '6', 'Negros Occidental', 'LGU-Negros Occ.', 'LGU-Negros Occidental', 'Provincial Capitol\n6100 Bacolod City, Negros Occidental\n', 'Gov. EUGENIO JOSE V. LACSON', 'Tel: (034) 434-1153; 434-2201 (1152)\nFax: (034) 434-6442\nCel: 09190049118 (Provincial Admin)\nOPAg: (034) 709-9747 (Admin)\n434-8324 (Planning)\n431-5834 (Red Tide)', 'admin@negocc.gov.ph; opanegocc@yahoo.com', 'LGUs'),
(297, '7', 'Bohol', 'LGU-Bohol', 'LGU-Bohol', 'Gov. Lino I. Chatto Drive, New Provincial Capitol Bldg.\nBrgy. Cogon, 6300 Tagbilaran City, Bohol', 'Gov. ERICO ARISTOTLE C. AUMENTADO', 'Tel: (038) 411-3573 / 0835; 501-0718\nCel: 0920-910-6591\nFax: (038) 501-0718\nOPAg: 0939-919-4629; 0917-302-1629', 'agriculturebohol_opa@yahoo.com;\nlizaquirog65@yahoo.com', 'LGUs'),
(298, '7', 'Cebu', '', '', '', 'Gov. GWENDOLYN F. GARCIA', 'Tel: (032) 888-2328 loc. 1024;         888-2305 / 888-2311 loc 1017 / 1005/ 1007\nOPAg: 888-2321 loc 1190', 'cebugov2019@gmail.com; pio@cebu.gov.ph;         provincialcapitol2019@gmail.com; pagcebu@yahoo.com', 'LGUs'),
(299, '7', 'Siquijor', '', '', '', 'Gov. JAKE VINCENT S. VILLA', 'Tel: (035) 344-2015; 344-0225\nFax: (035) 344-2251', 'opasiq7@gmail.com', 'LGUs'),
(300, '7', 'Negros Oriental', 'LGU-Negros Oriental', 'LGU-Negros Oriental', 'Provincial Capitol\n6200 Dumaguete City, Negros Oriental', 'Gov. MANUEL L. SAGARBARRIA', 'Tel: (035) 225-3532 Local 203; 225-1111\nFax: (035) 422-8887 loc. 670\nOPAg: (035) 225-2855; 09985858324; 09178046142', 'governor.negor@gmail.com; cropsdiv_pao@yahoo.com', 'LGUs'),
(301, '8', 'Biliran', '', '', '', 'Gov. GERARD ROGER M. ESPINA', 'Tel: (053) 541-9021; 500-9648\nFax: (053) 500-9649; 500-9021\nOPAS: 09777723915', 'opas@biliran.gov.ph; governor@biliran.gov.ph', 'LGUs'),
(302, '8', 'Eastern Samar', 'LGU - E. Samar', 'LGU - Eastern Samar', 'Provincial Capitol\n6800 Borongan, Eastern Samar', 'Gov. BEN P. EVARDONE', 'Tel: (055) 261-2414 / 2155; 560-9438\nFax: (055) 560-9077; 261-2414\nGov: 0917-553-8754; 0917 112 8673\nOPAS: (055) 560-9026;\n0921-397-0835', 'govbpe@yahoo.com; pgo@easternsamar.gov.ph; \nopaseastsamar1016@gmail.com; pgo.esamar@gmail.com', 'LGUs'),
(303, '8', 'Leyte', 'LGU-Leyte', 'LGU-Leyte', 'Provincial Capitol, Sen. Enage St.\n6500 Tacloban City, Leyte', 'Gov CARLOS JERICHO L. PETILLA', 'Tel: (053) 321-4927; 523-9925; (053) 832-3993\nFax: (053) 325-5156\n', 'leyte.prov@yahoo.com; leyteagriculture@gmail.com', 'LGUs'),
(304, '8', 'Northern Samar', 'LGU-N. Samar', 'LGU- Northern Samar', 'Provincial Capitol\n6400 Catarman, Northern Samar', 'Gov. EDWIN MARINO C. ONGCHUAN', 'Tel: (055) 500-9694\nFax: (055) 354-1239; 251-8100 /8205\nCel: 0917-5754624 (Gov)\nOPAg: (055) 254-1127', 'nsamarpio@gmail.com', 'LGUs'),
(305, '8', 'Samar', 'LGU-Samar', 'LGU- Western Samar', 'Provincial Capitol, 6700 Catbalogan City, Samar', 'Gov. SHAREE ANN T. TAN', 'Tel: (055) 251-2982 /2484; (02) 421-9862; 356-1202; 356-1203\nCel: 0961 680 4412 (PIO)\nFax: (055) 251-2884; Manila: 421-9862\nOPAg: 251-3112; 356-1455', 'congshareeanntan@gmail.com; pio.sparksamar@gmail.com', 'LGUs'),
(306, '8', 'Southern Leyte', 'LGU-S. Leyte', 'LGU- Southern Leyte', 'Provincial Capitol\n6600 Maasin, Southern Leyte', 'Gov. DAMIAN G. MERCADO', 'Tel: (053) 381-4326; 570-9018; 570-9052\nCel: +63-9554206748 | +63-9815298415\nFax: (053) 570-9018; 381-4326\nOPAg: (053) 381-2360; 0915-492-1329', 'soleytesocialmediabureau@gmail.com; pgo_soleyte58@yahoo.com; PAgSO_So.Leyte@yahoo.com\n', 'LGUs'),
(307, '9', 'Zamboanga Sibugay', 'LGU-Zamboanga Sibugay', 'LGU-Zamboanga Sibugay', 'Provincial Capitol, Ipil Heights\n7001 Zamboanga Sibugay', 'Gov. DULCE ANN K. HOFER', 'Telefax: (062) 333-5557\nCel: 097540797255; \nOPAg: (062) 333-2780\nCel: 0955-4308-786', 'info@sibugay.gov.ph; governor@sibugay.gov.ph; agri@sibugay.gov.ph; ', 'LGUs'),
(308, '9', 'Zamboanga del Norte', 'LGU-Zamboanga del Norte', 'LGU-Zamboanga del Norte', 'Provincial Capitol\n7100 Dipolog City,\nZamboanga del Norte', 'Gov. ROSALINA G. JALOSJOS', 'Tel: (065) 212-2910; 212-4798\nFax: (065) 212-3563\nOPAg: (065) 212-3960', 'lgu.zamboangadelnorte@yahoo.com', 'LGUs'),
(309, '9', 'Zamboanga del Sur', 'LGU-Zamboanga del Sur', 'DA-Zamboanga Sur', 'Provincial Capitol\n7016 Pagadian City, Zamboanga del Sur', 'Gov. VICTOR J. YU', 'Tel: (062) 214-2944/1752; (062) 925 0708\nFax: (062) 214-2944\nOPAg: (062) 215-2000; 214-2944; \nCel: 0933-869-2418', 'dilgzds@gmail.com;\nzds_pago@yahoo.com', 'LGUs'),
(310, '10', 'Bukidnon', 'LGU-Bukidnon', '', 'Provincial Capitol\n8700 Malaybalay, Bukidnon', 'Gov. ROGELIO NEIL P. ROQUE.', 'Tel: (088) 813-2457; 221-2523\nFax: (088) 813-3845; 813-2457\nCel: 0917 816 3191\nOPAg: (088) 813-5616; 0905-810-9007; 0917-632-6409', 'bukidnonpagro@gmail.com; bagongbukidnon@oneilroque.ph; paia@bukidnon.gov.ph', 'LGUs'),
(311, '10', 'Camiguin', '', '', '', 'Gov. XAVIER JESUS D. ROMUALDO', 'Tel: (088) 387-1022\nFax: (088) 387-1014\nOPAg: 09068794541; 09773644604', 'Camiguin@gmail.com; pao.camiguin1998@gmail.com; ', 'LGUs'),
(312, '10', 'Lanao del Norte', 'LGU-Lanao del Norte', '', 'Provincial Capitol\n9209 Tubod, Lanao del Norte', 'Gov. IMELDA Q. DIMAPORO \n ', 'Tel: (063) 341-5174; 41-5241 loc. 300\nFax: (063) 341-5345\nOPAg: (063) 341-5673; 341-5221; 0935-484-5661;\n09754888570', 'lanaodelnorteagriculture@gmail.com;\ninformation_ldn@yahoo.com; j_quibranza@yahoo.com', 'LGUs'),
(313, '10', 'Misamis Occidental', 'LGU-Misamis Occidental', '', 'Provincial Capitol\n7207 Oroquieta City, Misamis Occidental', 'Gov. HENRY S. OAMINAL SR.', 'Tel: (088) 531-1333; 531-2099\nFax: (088) 531-1333; 531-1632\nOPAg: (088) 531-1201', 'pgo@misocc.gov.ph; pao_mis.occ@yahoo.com;\npao_mis.occ@gmail.com; \nsp_misocc@yahoo.com', 'LGUs'),
(314, '10', 'Misamis Oriental', 'LGU-Misamis Oriental', '', 'Provincial Capitol\n9000 Cagayan de Oro City, Misamis Oriental', 'Gov. PETER M. UNABIA', 'Tel: (0882) 274-5138\nCel: 0977-6556-496; 09177245286\nFax: (0882) 272-5824\nOPAg: 0935 110 4650', 'mor_r10@yahoo.com; misorpio@gmail.com; agribizmisor@gmail.com', 'LGUs'),
(315, '11', 'Davao de Oro (Compostella Valley)', '', '', '', 'Gov. DOROTHY M. GONZAGA', 'Tel: +44 888 12 345; (084) 376-1052; 376-1036\nCel: 0920-744-8269\nFax: (084) 376-1028', 'information@davaodeoro.gov.ph; pagrodavaodeoro@gmail.com', 'LGUs'),
(316, '11', 'Davao del Norte', 'LGU-Davao del Norte', 'LGU-Davao del Norte', 'Provincial Capitol\n8100 Tagum, Davao del Norte', 'Gov. EDWIN I. JUBAHIB', 'Tel: (084) 655-9396\nCP: 0998-349-0958; 0999-2221967\n0917-8103526\nFax: (084) 655-9396\nOPAg: (084) 655-9402; 216-6493', 'pagro@davaodelnorte.gov.ph; pa@davaodelnorte.gov.ph; pgopsddo@gmail.com\npgo@davaodeoro.gov.ph; paoitcdd@gmail.com; ecomval@gmail.com', 'LGUs'),
(317, '11', 'Davao Occidental', '', '', '', 'Gov. FRANKLIN BAUTISTA', 'Cel: 0998-5612109', '', 'LGUs'),
(318, '11', 'Davao Oriental', '', '', '', 'Gov. NI?O S. UY', 'Tel: (087) 811-5030; 811-5013\nFax: (087) 811-4332\nOPAg: 3884-733/3883-556', 'pgodavaooriental@gmail.com; davorpagro@gmail.com', 'LGUs'),
(319, '11', 'Davao del Sur', 'LGU-Davao del Sur', 'LGU-Davao del Sur', 'Provincial Capitol\n8002 Matti, Digos, Davao del Sur', 'Gov. YVONNE R. CAGAS\n', 'Tel: (082) 272-0427; 553-9142\nCel: 0921-660-5029\nFax: (082) 272-0427; 553-9142\nOPAg: (082) 227 3942', 'thedavaodelsur@gmail.com; opagdavaodelsur@gmail.com; davaodelsur1967@gmail.com', 'LGUs'),
(320, '12', 'Sarangani', 'LGU-Sarangani', 'LGU-Saranggani', 'Provincial Capitol\n9501 Alabel, Sarangani Province', 'Gov. ROGELIO D. PACQUIAO', 'Tel: (083) 508-2258; 508-5242; (083) 508-0168;\nCel: 0919-0979-311; 0921-8049-793\nFax: (083) 508-2258\nOPAg: (083) 508-2242     ', 'governor.sarangani@gmail.com; opagsarangani2017@gmail.com; info.sarangani@gmail.com', 'LGUs'),
(321, '12', 'South Cotabato', 'LGU-South Cotabato', 'LGU-South Cotabato', 'Provincial Capitol\n9506 Koronadal, South Cotabato', 'Gov. REYNALDO S. TAMAYO JR.', 'Tel: (083) 228-2620; 228-3754; 228-3025\nCp: 0928-345-3142\nFax: (083) 228-2620; 228-2432\nOPAg: (083) 228-3433; 228-6984; 228-3839; 228-2419; fax: 228-3433', 'info@southcotabato.gov.ph; pagrisouthcotabato@yahoo.com; jpnavarrette@yahoo.com; info@stagingsouthcotabato.digitalfusionitsolutions.com', 'LGUs'),
(322, '12', 'Cotabato', 'LGU- Cotabato', 'LGU-North Cotabato', 'Provincial Capitol, 9400 Amas, Kidapawan City, Cotabato', 'Gov. EMMYLOU ?LALA? TALI?O-MENDOZA', 'Tel: (064) 521-8080, local 1012, 1013; 09293298095\nFax: (064) 521-8081; (064) 278-7019 (tel/fax)\nOPAg: (064) 521-8080, local 1400; 278-7019; 0949-370-4408', 'admin@cotabatoprov.gov.ph', 'LGUs'),
(323, '12', 'Sultan Kudarat', 'LGU-Sultan Kudarat', 'LGU-Sultan Kudarat', 'Provincial Capitol\n9805 Isulan, Sultan Kudarat', 'Gov. DATU PAX ALI S. MANGUDADATU', 'Tel: (064) 201-3027; 201-4282; (064) 201 3023\nFax: (064) 201-3027\n0935-435-0557\nOPAg: (064) 201-5098-9; 0955 480 2957', 'opag_estela@yahoo.com; sultankudarat_mag@yahoo.com', 'LGUs'),
(324, 'Caraga', 'Agusan del Norte', 'LGU-Agusan del Norte', 'LGU-Agusan del Norte', 'Provincial Capitol\n8600 Butuan City, Agusan del Norte', 'Gov. \nMA. ANGELICA ROSEDELL M. AMANTE', 'Tel: (085) 342-8022\nFax: (085) 815-1467\nCel: 09635697016; 09368547823\nOPAg: (085) 341-8164; 342-8063; \n09635919389; 09453445219', 'agriculture.adn@gmail.com; paoadn@yahoo.com; provinceofagusandelnorte@gmail.com', 'LGUs'),
(325, 'Caraga', 'Agusan del Sur', 'LGU-Agusan del Sur', 'LGU-Agusan del Sur', 'Governor Democrito O. Plaza Government Center,\n8500 Prosperidad, Agusan del Sur', 'Gov. SANTIAGO B. CANE JR.', 'Tel: (085) 343-7369; 242-1061/4\nFax: (085) 343-7369\n0907-930-2445;\n0925-552-1343\nOPAg: 09106259005', 'pavoagusandelsur@gmail.com\nmail@agusandelsur.gov.ph; siopao_ads@yahoo.com; mail@pgas.ph', 'LGUs'),
(326, 'Caraga', 'Surigao del Norte', 'LGU-Surigao del Norte', 'LGU-Surigao del Norte', 'Provincial Capitol\n8400 Surigao City, Surigao del Norte', 'Gov. ROBERT LYNDON S. BARBERS', 'Tel: (086) 826-7778; 826-3962; 826-4203, local 444; 232-6206\nFax: (086) 232-6206\nOPAg: (086) 826-4021; 362-1547\nProv Administrator: (086) 826-3962; 826-4203, local 143', 'govlyndonbarbers@gmail.com; sdngovernorsoffice@gmail.com; panro_sdn@yahoo.com; rubylagahit@gmail.com', 'LGUs'),
(327, 'Caraga', 'Surigao del Sur', 'LGU-Surigao del Sur', 'LGU-Surigao del Sur', 'Provincial Capitol\n8300 Tandag, Surigao del Sur', 'Gov. ALEXANDER ?AYEC? T. PIMENTEL', 'Tel: (086) 211-3633; (086) 211-3666\nFax: (086) 211-3633\nOPAg: (086) 211-3290; (086)211-3168', 'sdsprovince@gmail.com; opagsursur@gmail.com', 'LGUs'),
(328, 'Caraga', 'Dinagat Islands', 'LGU-Dinagat Is.', 'LGU-Dinagat Is.', 'Provincial Capitol, Bahay Turista San Jose, 8412 Dinagat Islands', 'Gov. NILO P. DEMEREY, JR.', 'Cel: 09486462753; 09510486738; 09067985947 (Remedy Aksyon Center)\nOPAg: 0912 249 4241', 'pao_pdi@yahoo.com; dinagatislands.pio@gmail.com; opag.pdi2021@gmail.com; piodinagatislandspdi@gmail.com', 'LGUs'),
(329, 'BARMM', 'Lanao del Sur', 'LGU-Lanao del Sur', '', 'Provincial Capitol,9700 Marawi City,?Lanao del Sur', 'Gov. MAMINTAL ALONTO ADIONG JR.', 'Tel: (02) 928-9491\nCP: 09079551205; 09065329895; 0909 887 8000\nFax: (02) 928-9491\nOPAg: 0905 885 1089', 'lanaodelsurofficial@gmail.com; daf.lanaosur@yahoo.com;\nmohammadrajiv@rocketmail.com; bombitadiong.official22@gmail.com; pio.plgu@gmail.com', 'LGUs'),
(330, 'BARMM', 'Basilan', 'LGU-Basilan', '', 'Provincial Capitol\n7300 Isabela, Basilan', 'Gov. JIM S. HATAMAN SALLIMAN', 'Tel: (062) 200-3414 / 3417 / 3397\nFax: (062) 200-3419\nOPAg: 0936 579 1829', 'admin@basilan.gov.ph; ppdo@basilan.gov.ph; opagbasilan.gov@gmail.com\n', 'LGUs'),
(331, 'BARMM', 'Maguindanao del Sur', 'LGU-Maguindanao', '', 'Provincial Capitol\n9605 Sultan Kudarat, Maguindanao', 'Gov. BAI MARIAM S. MANGUDADATU', 'Tel: (064) 489-0905; 489-0998\nFax: (064) 489-0905\nOPAg: (064) 552-2315; \n0905-839-7494;\n0908-947-5918', 'opagmaguindanao@gmail.com', 'LGUs'),
(332, 'BARMM', 'Sulu', 'LGU-Sulu', '', 'Provincial Capitol\n7400 Kakuyugan, Jolo, Sulu', 'Gov. ABDU SAKUR M. TAN', 'Tel: (085) 341-8911 loc. 2706; 09277474002\nOPAg: 0927-3515297', 'sulugovernment@yahoo.com; sulu.pio@gmail.com;\ndaf.sulu@yahoo.com', 'LGUs'),
(333, 'BARMM', 'Tawi-Tawi', 'LGU-Tawi-Tawi', '', 'Provincial Capitol\n7500 Bongao, Tawi-Tawi', 'Gov. YSHMAEL I. SALI', '0997 830 6398', 'kasalitawitawi2019@gmail.com', 'LGUs'),
(334, 'BARMM', 'Maguindanao del Norte', 'LGU-Tawi-Tawi', '', 'Provincial Capitol\n7500 Bongao, Tawi-Tawi', 'Gov. ABDULRAOF A. MACACUA', 'Contact Person: Najmah C. Macapundag-Panolong\nExecutive Assistant IV (Executive Secretary) 0917-717-6727, (064) 4213773', 'Maguindanaodelnorte@gmail.com; opagmaguindanaonorte@gmail.com', 'LGUs'),
(335, '3', 'Nueva Ecija', 'PhilMech ', 'Philippine Center for Postharvest Development and Mechanization', 'CLSU Compound, Science City of Mu?oz, 3120 Nueva Ecija', 'Dir. Dionisio G. Alvindia, PhD., \nExecutive Director (Director IV)', 'Cel: 09328696837; 09178004526; 09178130852', 'od@philmech.gov.ph;\nboyet.alvindia@da.gov.ph', 'Science City Community'),
(336, '3', 'Nueva Ecija', 'PhilSCAT', 'Phil-Sino Center for Agriculture and Technology', 'CLSU Compound, Science City of Mu?oz, 3120 Nueva Ecija', 'Dr. Marvin M. Cinense, \nDirector', 'Tel: (044) 940-9944, 940-5463', 'philscat@gmail.com', 'Science City Community'),
(337, '3', 'Nueva Ecija', 'DA-RCPC III', 'DA-Regional Crop Protection Center', 'PhilRice Cmpd., Maligaya, Science City of Mu?oz, 3119 Nueva Ecija', 'Mr. Edgardo S. Supan\nChief', 'Telefax: (044) 456-0075; 963-7412', 'rcpc@rfo3.da.gov.ph\nrcpc3.ild@gmail.com', 'Science City Community'),
(338, '3', 'Nueva Ecija', 'BPI-NSQCS III', 'Bureau of Plant Industry-National Seed Quality Control Services', 'PhilRice Cmpd., Maligaya, Science City of Mu?oz, 3119 Nueva Ecija', 'Ms. Josephine A. Reyes, \nRegional Chief', 'Tel: (044) 456-0995', 'nsqcs_reg3@yahoo.com; nsqcs.reg3@gmail.com', 'Science City Community'),
(339, '3', 'Nueva Ecija', 'COA', 'Commission on Audit of the Phils.', 'PhilRice Cmpd., Maligaya, Science City of Mu?oz, 3119 Nueva Ecija', 'Ms. Ma. Leilani M. Otic \nAuditor', 'Loc 370', 'mlmotic_818@yahoo.com.ph', 'Science City Community');
INSERT INTO `tbl_receipients` (`id`, `region`, `province`, `acronym`, `agencyOrCooperative`, `officeAddress`, `headOrChair`, `contactNo`, `email`, `type`) VALUES
(340, '3', 'Nueva Ecija', 'DOST III', 'Department of Science and Technology-Provincial Science and Technology Office', 'DOST Compound, Central Luzon State University (CLSU), Science City of Mu?oz, Nueva Ecija', 'Ms. Leidi Mel B. Sicat', 'Cel: 0919-390-1305', 'pstonuevaecija@ro3.dost.gov.ph', 'Science City Community'),
(341, '3', 'Pampanga', 'DOST III', 'Department of Science and Technology Region 3', 'Diosdado Macapagal Government Center, Maimpis, City of San Fernando, Pampanga', 'Dr. Julius Caesar V. Sicat,\nRegional Director\n', 'Cel: 0915-465-2642', 'records@ro3.dost.gov.ph', 'Science City Community'),
(342, '3', 'Nueva Ecija', 'BFAR-NFFTC', 'Bureau of Fisheries and Aquatic Resources-National Freshwater Fisheries Technology Center', 'CLSU, Science City of Mu?oz 3120 Nueva Ecija', 'Ms. Ma. Jodecel C. Danting, \nCenter Chief', 'Tel: (044) 456-0670; 456-0971; 211-5213\nFax: 456-1671\nMobile: 0927-814-0658', 'nfftc@bfar.da.gov.ph', 'Science City Community'),
(343, '3', 'Nueva Ecija', 'NIA-UPRIIS 1', 'National Irrigation Administration - Upper Pampanga River Integrated Irrigation System- Division I', 'Science City of Mu?oz, 3120 Nueva Ecija', 'Engr. Felix L. Tea?o Jr.\nDivision Manager', 'Tel: 044-456-0043', 'fltea?o19@gmail.com;\nupriis.divisiob1@nia.gov.ph', 'Science City Community'),
(344, '3', 'Nueva Ecija', 'PCC', 'Philippine Carabao Center', 'Marharlika Highway, CLSU, Science City of Mu?oz, 3120 Nueva Ecija', 'Dr. Caro B. Salces,\nOIC-Executive Director', 'Tel: (044) 456-0731; (044) 456-0735', 'oed@pcc.gov.ph', 'Science City Community'),
(345, '3', 'Nueva Ecija', 'CLAARRDEC', 'Central Luzon Agriculture and Resources Research and Development Consortium', 'CLSU Compound, Science City of Mu?oz, 3120 Nueva Ecija', 'Janet L. Saturno,\nConsortium Director', 'Tel: (044) 456 0704; (044) 940-6854', 'claarrdec@gmail.com', 'Science City Community'),
(346, '4-A', 'Laguna', 'IRRI', 'International Rice Research Institute', 'Los Ba?os, Laguna', 'Ajay Kohli\nInterim Director General\n', 'Tel: (02) 892-0354, 580-5699', 'a.kohli@irri.org;\najakoy@gmail.com;\ninfo@irri.org', 'Private Companies/Organizations'),
(347, '4-A', 'Laguna', 'Bayer ', 'Bayer Crop Science Inc.', 'Bayer House, Canlubang Industrial Estate, Calamba City, 4028 Laguna', 'Mr. Recher Ondap\nSeed Manager/ PIPRR4D Task Force/\nKey Account Manager - Gov''t & Industrial', 'Tel: (02) 3226 4888;\n ', 'recher.ondap@bayer.com, thericeboard@gmail.com', 'Private Companies/Organizations'),
(348, 'NCR', 'Makati City', 'SLAC', 'SL Agritech Corporation', 'Sterling Place 2302 Pasong Tamo extension, Makati City 1231', 'Dr. Frisco M. Malabanan,\nSenior Technical Consultant/ PIPRR4D Task Force\n\n', '', 'fmmalabanan09@gmail.com', 'Private Companies/Organizations'),
(349, 'NCR', 'Laguna', 'PHBI', 'Pioneer Hi-Bred Philippines, Inc.', '1F APEC Bldg., UPLB S&T Park, Los Ba?os, Laguna 4031', '', ' +63 (02) 8 637 1234\n +63 (02) 8 687 5114\n +63 (02) 8 634 5530\n +63 (02) 8 634 5530\n +63 (02) 8 631 2908', '', 'Private Companies/Organizations'),
(350, '1', 'Ilocos Sur', 'CYM', 'Candon Youth for Empowerment Movement, Inc.t', ' No. 5 Foronda St., Brgy. San Jose, Candon City, Ilocos Sur', 'Ms. Joanne Valdez \nFounder', 'Mr. Giovanni V. Valdez (Contact Person)\nMobile#:0935-338-6175', 'valdezgiovani1@gmail.com;\nvaldezjo@gmail.com\n', 'Non-Government Organizations'),
(351, '3', 'Nueva Ecija', 'ASKI', 'Alalay sa Kaunlaran, Inc.', '105 Maharlika Highway, Cabanatuan City, Nueva Ecija\n', 'Mr. Rolando B. Victoria\nExecutive Director and CEO', 'Tel.: (044) 940-1800; 463-5770\nCel.: 0906-490-1081; 0999-885-2174; 0932-845-1897', 'info@aski.com.ph\nelena.velasco@aski.com.ph\nrodolfo.padua@aski.com.ph\n(contact person)', 'Non-Government Organizations'),
(352, '4-A', 'Laguna', 'BASF', 'BASF Agricultural Research Station', 'BASF Agricultural Research Station, San Luis Road , Brgy. Paciano Rizal Bay 4033 , Laguna,', 'Ms. Maria Carla Dolores\nRegional Technical Assistant ', 'Tel: (049) 501-1358 loc. 2033;\n', 'mariacarla.dolores@basf.com; michelle.a.santos@basf.com', 'Non-Government Organizations'),
(353, '4-A', 'Laguna', 'CARD', 'Center for Agriculture and Rural Development, Inc.', '20 M.L. Quezon St., City Subdivision,\nSan Pablo City, Laguna\n', 'Dr. Jaime Aristotle B. Alip \nFounder and Chairman Emeritus\n\nMr. Vicente P. Briones, Jr.\nExecutive Director \n\nMs. Marilyn M. Manila\nCommunity Development Director', 'Tel: (049) 562-4181 loc 106\nFax: (049) 561-2018\n+63 49 5612018', 'cardinc@cardmri.com\njosef.leron@cardmri.com', 'Non-Government Organizations'),
(354, '4-A', 'Laguna', 'CAMP', 'Coalition for Agriculture Modernization in the Philippines, Inc.', 'A. Aglibut Avenue, Los Ba?os, Laguna', 'Dr. Benigno D. Peczon, President', 'Tel. No. : (049) 543-9478\n(049) 501-1394; 576-6410', 'info@campagri.org\ncampsecretariat2014@gmail.com', 'Non-Government Organizations'),
(355, 'NCR', 'Quezon City', 'R1', 'Rice Watch and Action Network (RWAN)', 'c/o Action for Economic Reforms, Unit 1402 West Trade Center, 132 West Avenue, 1104 Quezon City', 'Hazel Arandez-Tanchuling\nExecutive Director', 'Telefax: (02) 351-8756; 757-6673;\n0928-5211908', 'hazel_tanchuling@yahoo.com', 'Non-Government Organizations'),
(356, 'NCR', 'Quezon City', 'CARRD', 'Center for Agrarian Reform and Rural Development', '22 Matipid St., Sikatuna Village, Quezon City', 'Ms. Marie Joy Q. Demaluan\nExecutive Director', '(02) 738 2651 / (02) 926 7397', 'carrdinc@gmail.com', 'Non-Government Organizations'),
(357, 'NCR', 'Quezon City', 'APPEND', 'Alliance of Philippine Partners in Enterprise Development, Inc.', '157A K-6TH St., Kamias, 1102 Quezon City', 'Dr. Virginia P. Juan \nPresident', 'Tel: (02) 426-4587; \n940-8274; \n(8)930-3960', 'vpjuan@append.org.ph;\nappendnetwork@gmail.com\ncontactus@append.org.ph', 'Non-Government Organizations'),
(358, 'NCR', 'Makati City', 'TSPI', 'Tulay sa Pag-unlad, Inc.', '2363 Nuestra Sra. de Antipolo St., Guadalupe Nuevo, Makati City 1212\n', 'Mr. Rene E. Cristobal, President\nMs. Alice Z. Cordero, Executive Director', 'Tel: (02) 8403-8625/27/28/33\nFax: (02) 846-5732\nCel.: 0917-8305017', 'partners@tspi.org\ntspicustomercare@tspi.org\n\n', 'Non-Government Organizations'),
(359, 'test', 'test', 'test', 'test', 'test', 'test', '09912041666', 'irincomanuel@gmail.com', 'Farmer Partners');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `username`, `email`, `message`, `status`, `code`, `date_created`, `date_updated`) VALUES
(1, 'admin', 'irincomanuel@gmail.com', 'test \n\ndata ', 'sent', 'iTZoJYcmQW', '2023-09-04 01:12:12', '2023-09-04 01:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(10) unsigned NOT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `middleName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `extName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `secondaryEmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `region` int(11) NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `municipality` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agencyId` int(11) NOT NULL,
  `stationId` int(11) NOT NULL,
  `position` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastLogin` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `isDeleted` tinyint(4) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sync_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `middleName`, `lastName`, `extName`, `username`, `email`, `secondaryEmail`, `password`, `sex`, `region`, `province`, `municipality`, `agencyId`, `stationId`, `position`, `designation`, `remember_token`, `created_at`, `updated_at`, `lastLogin`, `api_token`, `isDeleted`, `picture`, `contact_no`, `sync_date`) VALUES
(23, 'admin', '', 'admin', '', 'admin', 'admin@philrice.gov.ph', '', '$2y$10$Oo8d.R09Y.s0LHAx9J1WBuoKqXjxoFYNhvgvZv12xqFFeo6bH/.0m', 'F', 0, '', '--SELECT ASSIGNED MUNICIPALITY--', 0, 0, '', '', '8gwpHqT9Hu62BhhhFVY5ZAZO8A2UvCKl0t4wh1kIKWa6f2vjP2VjHgBJWD3B', '2019-08-30 08:56:27', '2019-12-06 05:49:25', NULL, 'VKljJCNCssl6GJotZV6gbHwjn7PmwfWsfCfuZQdOUmYmhaxnOjEdbvm2pJlE', 0, '', NULL, '2023-08-16 05:40:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib_divisions`
--
ALTER TABLE `lib_divisions`
  ADD PRIMARY KEY (`id_division`);

--
-- Indexes for table `lib_offices`
--
ALTER TABLE `lib_offices`
  ADD PRIMARY KEY (`id_office`);

--
-- Indexes for table `lib_positions`
--
ALTER TABLE `lib_positions`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `lib_stations`
--
ALTER TABLE `lib_stations`
  ADD PRIMARY KEY (`id_station`);

--
-- Indexes for table `lib_units`
--
ALTER TABLE `lib_units`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`), ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`userId`,`roleId`), ADD KEY `role_user_roleid_foreign` (`roleId`);

--
-- Indexes for table `tbl_attachements`
--
ALTER TABLE `tbl_attachements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_presenterprofile`
--
ALTER TABLE `tbl_presenterprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_receipients`
--
ALTER TABLE `tbl_receipients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib_divisions`
--
ALTER TABLE `lib_divisions`
  MODIFY `id_division` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11129;
--
-- AUTO_INCREMENT for table `lib_offices`
--
ALTER TABLE `lib_offices`
  MODIFY `id_office` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11038;
--
-- AUTO_INCREMENT for table `lib_positions`
--
ALTER TABLE `lib_positions`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16318;
--
-- AUTO_INCREMENT for table `lib_stations`
--
ALTER TABLE `lib_stations`
  MODIFY `id_station` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11017;
--
-- AUTO_INCREMENT for table `lib_units`
--
ALTER TABLE `lib_units`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11147;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_attachements`
--
ALTER TABLE `tbl_attachements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_presenterprofile`
--
ALTER TABLE `tbl_presenterprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_receipients`
--
ALTER TABLE `tbl_receipients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=360;
--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_roleid_foreign` FOREIGN KEY (`roleId`) REFERENCES `roles` (`roleId`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `role_user_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
