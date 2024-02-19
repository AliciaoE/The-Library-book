-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2024 a las 20:00:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `library`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(14) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `description` text NOT NULL,
  `book_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id`, `ISBN`, `title`, `author`, `description`, `book_image`) VALUES
(1, '978073521129', 'Atomic Habits', 'James Clear', 'Atomic Habits offers a proven framework for improving - every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.', 'The-Library-book\\assets\\images\\books\\atomic-habbits.JPG'),
(2, '9781400031702', 'The Secret History', 'Donna Tartt', '\"The Secret History\" by Donna Tartt is a mesmerizing and haunting novel that follows a group of brilliant students at an elite college in New England. When they become entangled in a dark and twisted secret, their lives take a shocking and irreversible turn. As their secrets unravel and their moral boundaries blur, the consequences of their actions become increasingly dire. With beautifully crafted prose and a gripping narrative, Tartt explores themes of friendship, morality, and the human psyche in this unforgettable literary masterpiece.', 'The-Library-book\\assets\\images\\books\\the-secret-history.JPG'),
(3, '9780385539258', 'A Little Life', 'Hanya Yanagihara', '\"A Little Life\" is an acclaimed and poignant novel that follows the lives of four friends, Jude, Willem, JB, and Malcolm, over several decades in the city of New York. The story primarily focuses on Jude, who carries with him a painful and traumatic past that he struggles to overcome. Through his relationships with his friends and his professional career, the novel explores themes of friendship, love, trauma, and redemption in a powerful and emotive narrative. \"A Little Life\" has been praised for its poignant writing and its ability to address difficult themes with sensitivity and emotional depth.', 'The-Library-book\\assets\\images\\books\\a-little-life.JPG'),
(4, '9780156007757', 'Blindness', 'José Saramago', ' \"Blindness\" is a novel by Nobel Prize-winning author José Saramago. The story follows an unexplained epidemic of blindness that affects an entire city, plunging its inhabitants into chaos and despair. As society breaks down and the government struggles to contain the crisis, a group of blind people find themselves in a desperate struggle for survival and dignity. Saramago\'s narrative explores themes of human nature, power dynamics, and the resilience of the human spirit in the face of adversity. \"Blindness\" is a haunting and thought-provoking tale that prompts readers to reflect on the fragility of civilization and the depths of human experience.', 'The-Library-book\\assets\\images\\books\\blindness.jpg'),
(5, '9780451524935', '1984', 'George Orwell', '\"1984\" is a dystopian novel written by George Orwell, published in 1949. Set in a totalitarian regime ruled by the Party led by the enigmatic Big Brother, the story follows the life of Winston Smith, a low-ranking member of the Outer Party who works for the Ministry of Truth. In a society where surveillance is omnipresent and individualism is suppressed, Winston rebels against the oppressive regime by engaging in acts of defiance and seeking forbidden knowledge. As he navigates the complexities of love, loyalty, and rebellion', 'The-Library-book\\assets\\images\\books\\1984.JPG'),
(6, '9780544338012', 'The Silmarillion', 'J.R.R. Tolkien', ' \"The Silmarillion\" is a collection of mythopoeic tales written by J.R.R. Tolkien, published posthumously in 1977. It serves as the foundation for the fictional universe of Middle-earth, setting the stage for the events depicted in \"The Hobbit\" and \"The Lord of the Rings\" trilogy. The book recounts the creation myth of Tolkien\'s universe, detailing the origins of the world, the Valar (angelic beings), the Maiar (lesser spirits), and the various races of Middle-earth, including Elves, Dwarves, Men, and Orcs. It also chronicles the legendary struggles between the forces of light and darkness, the fall of the Elven kingdoms, and the rise and fall of powerful artifacts such as the Silmarils. Written in Tolkien\'s distinctive style', 'The-Library-book\\assets\\images\\books\\silmarillion.JPG'),
(7, '9781846590008', ' No Word From Gurb', 'Eduardo Mendoza', ' \"No Word From Gurb\" is a comedic novel written by Spanish author Eduardo Mendoza. The story follows an extraterrestrial being who takes on the appearance of various human forms while navigating life on Earth, particularly in Barcelona. After assuming the identity of Gurb, the alien becomes lost in the city and must embark on a series of absurd and humorous misadventures in an attempt to find his way back home. Set against the backdrop of contemporary urban life, the novel satirizes human behavior, societal norms, and the quirks of modern civilization. With its witty and inventive narrative style, \"No Word From Gurb\" offers readers a humorous and thought-provoking exploration of identity, belonging, and the absurdities of everyday life.', 'The-Library-book\\assets\\images\\books\\no-word-from-gurb.JPG'),
(8, '9780451226004', 'The Cathedral of the Sea', 'Ildefonso Falcones', '\"The Cathedral of the Sea\" is a historical novel written by Spanish author Ildefonso Falcones. Set in 14th-century Barcelona, the story follows the life of Arnau Estanyol, a young serf who rises from humble beginnings to become a successful master builder. As Arnau navigates the challenges of feudal society and the construction of the Santa Maria del Mar cathedral, he encounters love, betrayal, and political intrigue. Against the backdrop of religious persecution, social upheaval, and the Spanish Inquisition, Arnau struggles to protect his family and uphold his principles in a world rife with injustice and oppression. With its richly detailed historical setting and compelling narrative,', 'The-Library-book\\assets\\images\\books\\cathedral-of-the-sea.JPG'),
(9, '9780062515674', 'The Monk Who Sold His Ferrari', 'Robin Sharma', '\"The Monk Who Sold His Ferrari\" is a self-help book written by motivational speaker and author Robin Sharma. The book tells the story of Julian Mantle, a high-profile lawyer who undergoes a spiritual transformation after suffering a heart attack in the courtroom. Disillusioned with his materialistic lifestyle, Julian embarks on a journey to the Himalayas in search of enlightenment and discovers the wisdom of the Sages of Sivana. Through a series of teachings and practices, Julian learns valuable lessons about living a balanced and fulfilling life, including the importance of mindfulness, purpose, and personal growth.', 'The-Library-book\\assets\\images\\books\\the-monk-who-sold-his-ferrari.JPG'),
(10, '9780060850524', 'Brave New World', 'Aldous Huxley', '\"Brave New World\" is a dystopian novel written by Aldous Huxley, published in 1932. Set in a futuristic world where individuality and freedom have been sacrificed for stability and conformity, the story takes place in the World State, a society governed by the principles of mass production, consumerism, and social conditioning. Citizens are genetically engineered and conditioned from birth to fit into specific social classes, and recreational drugs such as soma are used to control emotions and maintain social order. The narrative follows Bernard Marx, an Alpha-Plus intellectual who becomes disillusioned with the shallow values of his society, and John the Savage, a \"savage\" from a reservation who challenges the World State\'s norms and values. Through their experiences, Huxley explores themes of totalitarianism, technology, individuality, and the pursuit of happiness, offering a provocative critique of contemporary society and the dangers of unchecked scientific progress', 'The-Library-book\\assets\\images\\books\\brave-new-world.JPG'),
(11, '9781878424310', 'The Four Agreements', 'Don Miguel Ruiz', ' \"The Four Agreements\" is a self-help book written by Don Miguel Ruiz, published in 1997. Drawing on ancient Toltec wisdom, Ruiz presents a code of conduct based on four agreements that can lead to personal freedom and happiness.', 'The-Library-book\\assets\\images\\books\\the-four-agreements.JPG'),
(12, '9780553383805', 'The House of the Spirits', ' Isabel Allende', ' \"The House of the Spirits\" is a novel written by Chilean author Isabel Allende, published in 1982. Set in Chile, the story spans several generations of the Trueba family and explores themes of love, power, and the supernatural. The narrative follows the lives of the patriarch Esteban Trueba, his wife Clara, and their descendants, as they navigate through the turbulent political landscape of Chile and confront their personal demons. Blending elements of magical realism with historical events, \"The House of the Spirits\" is a captivating saga that delves into the complexities of human relationships and the enduring legacy of family.', 'The-Library-book\\assets\\images\\books\\the-house-of-spirits.JPG'),
(13, '9780486411095', ' Dracula', ' Bram Stoker', '\"Dracula\" is a Gothic horror novel written by Irish author Bram Stoker, first published in 1897. The story is centered around Count Dracula, a centuries-old vampire from Transylvania, who moves to England in search of new blood and spreads terror among the populace of London. The novel unfolds through a series of diary entries, letters, and newspaper clippings, chronicling the efforts of a group of characters led by Professor Abraham Van Helsing to stop Dracula\'s reign of terror. Blending elements of folklore, superstition, and Victorian-era anxieties, \"Dracula\" is a classic tale of suspense, mystery, and the battle between good and evil. It has had a profound influence on vampire literature and popular culture, shaping the modern vampire archetype.', 'The-Library-book\\assets\\images\\books\\dracula.JPG'),
(14, '9781416914631', 'Go Ask Alice', 'Anonymous', ' \"Go Ask Alice\" is a controversial novel that presents itself as the real diary of a teenage girl who experiences a downward spiral into drug addiction. The book explores themes of drug abuse, peer pressure, and the struggles of adolescence. Originally published in 1971, it gained popularity for its raw and unflinching portrayal of the dangers of drug use. While the authorship of the book remains disputed, \"Go Ask Alice\" continues to be a widely read and discussed work, prompting conversations about substance abuse and its impact on young people.', 'The-Library-book\\assets\\images\\books\\go-ask-alice.JPG'),
(15, '9780385547345', 'Lessons in Chemistry ', 'Bonnie Garmus\r\n', '\r\nSet in 1960s California; Lessons In Chemistry is the brilliant, idiosyncratic and uplifting story of a female scientist whose career is derailed by the idea that a woman\'s place is in the home - something she most definitely does not believe - only to find herself the star of America\'s best-loved TV cooking show.\r\n', 'The-Library-book\\assets\\images\\books\\lessons-in-chemistry.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manage`
--

CREATE TABLE `manage` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` text NOT NULL,
  `role` text NOT NULL,
  `DNI/NIE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `last_name`, `role`, `DNI/NIE`) VALUES
(1, 'admi_1', 'Administrator', '00000001X'),
(2, 'admi_2', 'Administrator', '00000002X');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `manage`
--
ALTER TABLE `manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
