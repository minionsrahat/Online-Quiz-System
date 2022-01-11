-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 09:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_user_name`, `password`) VALUES
(1, 'techquiz@786gmail.com', 'techquiz');

-- --------------------------------------------------------

--
-- Table structure for table `categories_quiz`
--

CREATE TABLE `categories_quiz` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories_quiz`
--

INSERT INTO `categories_quiz` (`cat_id`, `cat_name`) VALUES
(2, 'PHP'),
(3, 'JAVASCRIPT'),
(4, 'C++'),
(5, 'C'),
(6, 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_answers`
--

CREATE TABLE `discussion_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `answer_by` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_answers`
--

INSERT INTO `discussion_answers` (`id`, `question_id`, `answer`, `answer_by`, `date`) VALUES
(1, 9, '/* centered columns styles */\r\n.row-centered {\r\n    text-align:center;\r\n}\r\n.col-centered {\r\n    display:inline-block;\r\n    float:none;\r\n    /* reset the text-align */\r\n    text-align:left;\r\n    /* inline-block space fix */\r\n    margin-right:-4px;\r\n    text-align: center;\r\n    background-color: #ccc;\r\n    border: 1px solid #ddd;', 7, '2021-09-25 02:52:01'),
(2, 9, '&sol;&ast; centered columns styles &ast;&sol;\r&NewLine;&period;row-centered &lbrace;\r&NewLine;    text-align&colon;center&semi;\r&NewLine;&rcub;\r&NewLine;&period;col-centered &lbrace;\r&NewLine;    display&colon;inline-block&semi;\r&NewLine;    float&colon;none&semi;\r&NewLine;    &sol;&ast; reset the text-align &ast;&sol;\r&NewLine;    text-align&colon;left&semi;\r&NewLine;    &sol;&ast; inline-block space fix &ast;&sol;\r&NewLine;    margin-right&colon;-4px&semi;\r&NewLine;    text-align&colon; center&semi;\r&NewLine;    background-color&colon; &num;ccc&semi;\r&NewLine;    border&colon; 1px solid &num;ddd&semi;', 7, '2021-09-25 03:02:15'),
(3, 9, '\"\"', 7, '2021-09-25 03:02:47'),
(4, 25, 'There is no need to overcomplicate things. This can be achieved with a simple short regular expression:\r\n\r\n$text = preg_replace(&quot;/(R){2,}/&quot;, &quot;$1&quot;, $text);', 7, '2021-09-25 13:56:24'),
(5, 9, '\r\napp.get(&#039;/&#039;, function(req, res) {\r\n\r\n  list(`./img`,(images)=&gt;{\r\n  if(images.error) throw images.error;\r\n  var floppa = images.files\r\n  let random = Math.floor((Math.random() * floppa.length))\r\n\r\n  var file = `domain${floppa[random]}`\r\n  res.json(\r\n    {\r\n      image: file\r\n    }\r\n    )\r\n});\r\n})', 7, '2021-09-26 00:37:55'),
(6, 25, 'I dont Know', 7, '2021-09-26 15:26:30'),
(7, 26, 'HIIIII', 7, '2021-09-27 14:01:19'),
(8, 26, '// These two have the same value\r\nnew String(&quot;test&quot;).equals(&quot;test&quot;) // --&gt; true \r\n\r\n// ... but they are not the same object\r\nnew String(&quot;test&quot;) == &quot;test&quot; // --&gt; false \r\n\r\n// ... neither are these\r\nnew String(&quot;test&quot;) == new String(&quot;test&quot;) // --&gt; false \r\n\r\n// ... but these are because literals are interned by \r\n// the compiler and thus refer to the same object\r\n&quot;test&quot; == &quot;test&quot; // --&gt; true \r\n\r\n// ... string literals are concatenated by the compiler\r\n// and the results are interned.\r\n&quot;test&quot; == &quot;te&quot; + &quot;st&quot; // --&gt; true\r\n\r\n// ... but you should really just call Objects.equals()\r\nObjects.equals(&quot;test&quot;, new String(&quot;test&quot;)) // --&gt; true\r\nObjects.equals(null, &quot;test&quot;) // --&gt; false\r\nObjects.equals(null, null) // --&gt; true', 10, '2021-09-27 15:56:05'),
(9, 11, 'Search related questions on stackoverflow. I think you will find better solutions', 9, '2021-09-27 20:01:47'),
(10, 23, 'Hey there\r\n', 9, '2021-09-27 22:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_category`
--

CREATE TABLE `discussion_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_category`
--

INSERT INTO `discussion_category` (`cat_id`, `cat_name`, `date`) VALUES
(1, 'Computer Science', '2021-09-24 15:19:35'),
(2, 'Database', '2021-09-24 15:19:35'),
(3, 'Web Development', '2021-09-24 15:20:35'),
(4, 'Programming', '2021-09-24 15:20:35'),
(5, 'Data Science', '2021-09-24 15:21:05'),
(6, 'App Development', '2021-09-24 15:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_questions`
--

CREATE TABLE `discussion_questions` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `code_snippet` varchar(2000) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussion_questions`
--

INSERT INTO `discussion_questions` (`id`, `cat_id`, `title`, `description`, `code_snippet`, `posted_by`, `date`) VALUES
(3, 1, 'How to use foreach get data from the database table', 'My database has a table called tblprojects with column names say, project_num, project_status, project_name. I want to use foreach loop to get the data from the database and display the records in php table.\r\n\r\nHowever I am unable to display the records with following code. Please help me in correcting it. Am new to using PHP.\r\n\r\nFollowing is the code I have written:', '&amp;lt;&amp;quest;php\r&amp;NewLine;     &amp;dollar;projects &amp;equals; array&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;     &amp;sol;&amp;sol; fetch data from the database\r&amp;NewLine;     &amp;dollar;records &amp;equals; mysql&amp;lowbar;query&amp;lpar;&#039;select project&amp;lowbar;num&amp;comma; project&amp;lowbar;status&amp;comma; project&amp;lowbar;name from tblprojects&#039;&amp;rpar; or die&amp;lpar;&quot;Query fail&amp;colon; &quot; &amp;period; mysqli&amp;lowbar;error&amp;lpar;&amp;rpar;&amp;rpar;&amp;semi;\r&amp;NewLine;&amp;quest;&amp;gt;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;&amp;lt;table  class&amp;equals;&quot;table table-striped table-condensed&quot; id&amp;equals;&quot;tblData&quot;&amp;gt;\r&amp;NewLine;    &amp;lt;thead&amp;gt;\r&amp;NewLine;        &amp;lt;tr&amp;gt;\r&amp;NewLine;            &amp;lt;th&amp;gt;Project Name&amp;lt;&amp;sol;th&amp;gt;\r&amp;NewLine;            &amp;lt;th&amp;gt;Project Number&amp;lt;&amp;sol;th&amp;gt;\r&amp;NewLine;            &amp;lt;th&amp;gt;Project Status&amp;lt;&amp;sol;th&amp;gt;\r&amp;NewLine;       &amp;lt;&amp;sol;tr&amp;gt;\r&amp;NewLine;    &amp;lt;&amp;sol;thead&amp;gt;\r&amp;NewLine;\r&amp;NewLine;    &amp;lt;tbody&amp;gt;\r&amp;NewLine;       &amp;lt;&amp;quest;php \r&amp;NewLine;            while &amp;lpar;  &amp;dollar;row &amp;equals;  mysql&amp;lowbar;fetch&amp;lowbar;assoc&amp;lpar;&amp;dollar;records&amp;rpar;    &amp;rpar;\r&amp;NewLine;            &amp;lbrace;\r&amp;NewLine;                &amp;dollar;projects&amp;lbrack;&amp;rsqb; &amp;equals; &amp;dollar;row&amp;semi;\r&amp;NewLine;                foreach &amp;lpar;&amp;dollar;projects as &amp;dollar;project&amp;rpar;&amp;colon;\r&amp;NewLine;      &amp;quest;&amp;gt;\r&amp;NewLine;        &amp;lt;tr&amp;gt;\r&amp;NewLine;            &amp;lt;td&amp;gt;&amp;lt;&amp;quest;echo &amp;dollar;project&amp;lbrack;&#039;proj&amp;lowbar;name&#039;&amp;rsqb;&amp;semi; &amp;quest;&amp;gt;&amp;lt;&amp;sol;td&amp;gt;\r&amp;NewLine;            &amp;lt;td&amp;gt;&am', 7, '0000-00-00 00:00:00'),
(9, 1, '\"How do I modify the URL without reloading the page?\"', '\"Is there a way I can modify the URL of the current page without reloading the page?\r\nI would like to access the portion before the # hash if possible.\r\nI only need to change the portion after the domain, so it&#039;s not like I&#039;m violating cross-domain policies.\"', 'function processAjaxData&lpar;response&comma; urlPath&rpar;&lbrace;\r&NewLine;     document&period;getElementById&lpar;\"content\"&rpar;&period;innerHTML &equals; response&period;html&semi;\r&NewLine;     document&period;title &equals; response&period;pageTitle&semi;\r&NewLine;     window&period;history&period;pushState&lpar;&lbrace;\"html\"&colon;response&period;html&comma;\"pageTitle\"&colon;response&period;pageTitle&rcub;&comma;\"\"&comma; urlPath&rpar;&semi;\r&NewLine; &rcub;', 7, NULL),
(10, 1, '\"How do I modify the URL without reloading the page?\"', '\"Is there a way I can modify the URL of the current page without reloading the page?\r\nI would like to access the portion before the # hash if possible.\r\nI only need to change the portion after the domain, so it&#039;s not like I&#039;m violating cross-domain policies.\"', 'function processAjaxData&lpar;response&comma; urlPath&rpar;&lbrace;\r&NewLine;     document&period;getElementById&lpar;\"content\"&rpar;&period;innerHTML &equals; response&period;html&semi;\r&NewLine;     document&period;title &equals; response&period;pageTitle&semi;\r&NewLine;     window&period;history&period;pushState&lpar;&lbrace;\"html\"&colon;response&period;html&comma;\"pageTitle\"&colon;response&period;pageTitle&rcub;&comma;\"\"&comma; urlPath&rpar;&semi;\r&NewLine; &rcub;', 7, '2021-09-24 17:49:33'),
(11, 4, '\"Python Tkinter mixing radio and default user input box in canvas?\"', '\"I like to mixed my radio button selection with a few user input boxes.\r\n\r\nI managed to output them separately but I can&#039;t combine them due to the one using canvas1.pack and another using row.pack.\r\n\r\nenter image description here\r\nThis is my first radio button interface where user will select Auto or Manual and there is a box for user to input stock symbols manually.\"', 'from tkinter import *\r\nfrom tkinter import simpledialog\r\nfrom tkinter import messagebox\r\nimport tkinter as tk\r\n\r\n#default filter values\r\nparameter1 = 100000\r\nparameter2 = 3\r\n\r\nglobal answer \r\nglobal user_list\r\n\r\n# Prepare parameters\r\nfields = [&#039;Min. parameter1&#039;, &#039;Min. parameter2&#039;, &#039;Min. 3parameter3&#039;,\r\n          &#039;Min. parameter4&#039;,&#039;Min. parameter5&#039;, &#039;Max. parameter6&#039;]\r\ndefault_values = [parameter1,parameter2,parameter3,parameter4,\r\n                  parameter5,parameter6]\r\ncaptured_values = []\r\n\r\ndef on_closing():\r\n    if messagebox.askokcancel(&quot;Quit&quot;, &quot;Do you want to quit?&quot;):\r\n        root.destroy()\r\n        sys.stdout = orig_stdout\r\n        f.close()\r\n        sys.exit(&quot;Application closed by user&quot;)', 7, '2021-09-25 07:04:16'),
(12, 4, '\"Python Tkinter mixing radio and default user input box in canvas?\"', '\"I like to mixed my radio button selection with a few user input boxes.\r\n\r\nI managed to output them separately but I can&#039;t combine them due to the one using canvas1.pack and another using row.pack.\r\n\r\nenter image description here\r\nThis is my first radio button interface where user will select Auto or Manual and there is a box for user to input stock symbols manually.\"', 'from tkinter import *\r\nfrom tkinter import simpledialog\r\nfrom tkinter import messagebox\r\nimport tkinter as tk\r\n\r\n#default filter values\r\nparameter1 = 100000\r\nparameter2 = 3\r\n\r\nglobal answer \r\nglobal user_list\r\n\r\n# Prepare parameters\r\nfields = [&#039;Min. parameter1&#039;, &#039;Min. parameter2&#039;, &#039;Min. 3parameter3&#039;,\r\n          &#039;Min. parameter4&#039;,&#039;Min. parameter5&#039;, &#039;Max. parameter6&#039;]\r\ndefault_values = [parameter1,parameter2,parameter3,parameter4,\r\n                  parameter5,parameter6]\r\ncaptured_values = []\r\n\r\ndef on_closing():\r\n    if messagebox.askokcancel(&quot;Quit&quot;, &quot;Do you want to quit?&quot;):\r\n        root.destroy()\r\n        sys.stdout = orig_stdout\r\n        f.close()\r\n        sys.exit(&quot;Application closed by user&quot;)', 7, '2021-09-25 07:05:10'),
(13, 1, '\"How do I modify the URL without reloading the page?\"', '\"As you might fairly be a newcomer to php, on one hand it is great to follow tutorials, however chosing a right source might be a frequent disasterous problem.\r\n\r\nWhen you are using functions like mysql_select_db and mysql_query it basiaclly means that you are using a deprecated mysql style.\r\n\r\nIf you go to official php documentation and search for mysql method, it is going to tell you about its deprecation.\r\n\r\nProblem here, though, is not a way you interact with database, your style of coding still works and many people still do it just like that.\"', '&lt;?php\r\n    include_once(&#039;db.php&#039;);\r\n\r\n    $name =$_POST[&#039;name&#039;];\r\n    $email =$_POST[&#039;email&#039;];\r\n    $phone =$_POST[&#039;phone&#039;];\r\n\r\n    if(mysql_query(&quot;INSERT INTO users (name,email,phone) VALUES (&#039;$name&#039;,&#039;$email&#039;,&#039;$phone&#039;)&quot;))\r\n    echo&quot;successfully inserted&quot;;\r\n    else\r\n    echo &quot;failed&quot;;\r\n?&gt;', 7, '2021-09-25 07:06:25'),
(14, 4, '\"How can I prevent SQL injection in PHP?\"', '\"If user input is inserted without modification into an SQL query, then the application becomes vulnerable to SQL injection, like in the following example:\"', '&lt;?php\r\n    $mysqli = new mysqli(&quot;server&quot;, &quot;username&quot;, &quot;password&quot;, &quot;database_name&quot;);\r\n\r\n    // TODO - Check that connection was successful.\r\n\r\n    $unsafe_variable = $_POST[&quot;user-input&quot;];\r\n\r\n    $stmt = $mysqli-&gt;prepare(&quot;INSERT INTO table (column) VALUES (?)&quot;);\r\n\r\n    // TODO check that $stmt creation succeeded\r\n\r\n    // &quot;s&quot; means the database expects a string\r\n    $stmt-&gt;bind_param(&quot;s&quot;, $unsafe_variable);\r\n\r\n    $stmt-&gt;execute();\r\n\r\n    $stmt-&gt;close();\r\n\r\n    $mysqli-&gt;close();\r\n?&gt;', 7, '2021-09-25 07:10:31'),
(15, 4, '\"How can I prevent SQL injection in PHP?\"', '\"If user input is inserted without modification into an SQL query, then the application becomes vulnerable to SQL injection, like in the following example:\"', '&amp;lt;&amp;quest;php\r&amp;NewLine;    &amp;dollar;mysqli &amp;equals; new mysqli&amp;lpar;&quot;server&quot;&amp;comma; &quot;username&quot;&amp;comma; &quot;password&quot;&amp;comma; &quot;database&amp;lowbar;name&quot;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;sol;&amp;sol; TODO - Check that connection was successful&amp;period;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;unsafe&amp;lowbar;variable &amp;equals; &amp;dollar;&amp;lowbar;POST&amp;lbrack;&quot;user-input&quot;&amp;rsqb;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;stmt &amp;equals; &amp;dollar;mysqli-&amp;gt;prepare&amp;lpar;&quot;INSERT INTO table &amp;lpar;column&amp;rpar; VALUES &amp;lpar;&amp;quest;&amp;rpar;&quot;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;sol;&amp;sol; TODO check that &amp;dollar;stmt creation succeeded\r&amp;NewLine;\r&amp;NewLine;    &amp;sol;&amp;sol; &quot;s&quot; means the database expects a string\r&amp;NewLine;    &amp;dollar;stmt-&amp;gt;bind&amp;lowbar;param&amp;lpar;&quot;s&quot;&amp;comma; &amp;dollar;unsafe&amp;lowbar;variable&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;stmt-&amp;gt;execute&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;stmt-&amp;gt;close&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;mysqli-&amp;gt;close&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;&amp;quest;&amp;gt;', 7, '2021-09-25 07:12:32'),
(16, 4, '\"How can I prevent SQL injection in PHP?\"', '\"If user input is inserted without modification into an SQL query, then the application becomes vulnerable to SQL injection, like in the following example:\"', '&amp;lt;&amp;quest;php\r&amp;NewLine;    &amp;dollar;mysqli &amp;equals; new mysqli&amp;lpar;&quot;server&quot;&amp;comma; &quot;username&quot;&amp;comma; &quot;password&quot;&amp;comma; &quot;database&amp;lowbar;name&quot;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;sol;&amp;sol; TODO - Check that connection was successful&amp;period;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;unsafe&amp;lowbar;variable &amp;equals; &amp;dollar;&amp;lowbar;POST&amp;lbrack;&quot;user-input&quot;&amp;rsqb;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;stmt &amp;equals; &amp;dollar;mysqli-&amp;gt;prepare&amp;lpar;&quot;INSERT INTO table &amp;lpar;column&amp;rpar; VALUES &amp;lpar;&amp;quest;&amp;rpar;&quot;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;sol;&amp;sol; TODO check that &amp;dollar;stmt creation succeeded\r&amp;NewLine;\r&amp;NewLine;    &amp;sol;&amp;sol; &quot;s&quot; means the database expects a string\r&amp;NewLine;    &amp;dollar;stmt-&amp;gt;bind&amp;lowbar;param&amp;lpar;&quot;s&quot;&amp;comma; &amp;dollar;unsafe&amp;lowbar;variable&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;stmt-&amp;gt;execute&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;stmt-&amp;gt;close&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;    &amp;dollar;mysqli-&amp;gt;close&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;&amp;quest;&amp;gt;', 7, '2021-09-25 07:12:55'),
(17, 4, '\"How do I modify the URL without reloading the page?\"', '\"Also, as others have suggested, you may find it useful/easier to step up a layer of abstraction with something like PDO.\r\n\r\nPlease note that the case you asked about is a fairly simple one and that more complex cases may require more complex approaches. In particular:\r\n\r\nIf you want to alter the structure of the SQL based on user input, parameterized queries are not going to help, and the escaping required is not covered by mysql_real_escape_string. In this kind of case, you would be better off passing the user&#039;s input through a whitelist to ensure only &#039;safe&#039; values are allowed through.\r\nIf you use integers from user input in a condition\"', '                       &amp;lt;&amp;quest;php\r&amp;NewLine;\r&amp;NewLine;     &amp;dollar;projects &amp;equals; array&amp;lpar;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;     &amp;sol;&amp;sol; fetch data from the database\r&amp;NewLine;\r&amp;NewLine;     &amp;dollar;records &amp;equals; mysql&amp;lowbar;query&amp;lpar;&#039;select project&amp;lowbar;num&amp;comma; project&amp;lowbar;status&amp;comma; project&amp;lowbar;name from tblprojects&#039;&amp;rpar; or die&amp;lpar;&quot;Query fail&amp;colon; &quot; &amp;period; mysqli&amp;lowbar;error&amp;lpar;&amp;rpar;&amp;rpar;&amp;semi;\r&amp;NewLine;\r&amp;NewLine;&amp;quest;&amp;gt;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;&amp;lt;table  class&amp;equals;&quot;table table-striped table-condensed&quot; id&amp;equals;&quot;tblData&quot;&amp;gt;\r&amp;NewLine;\r&amp;NewLine;    &amp;lt;thead&amp;gt;\r&amp;NewLine;\r&amp;NewLine;        &amp;lt;tr&amp;gt;\r&amp;NewLine;\r&amp;NewLine;            &amp;lt;th&amp;gt;Project Name&amp;lt;&amp;sol;th&amp;gt;\r&amp;NewLine;\r&amp;NewLine;            &amp;lt;th&amp;gt;Project Number&amp;lt;&amp;sol;th&amp;gt;\r&amp;NewLine;\r&amp;NewLine;            &amp;lt;th&amp;gt;Project Status&amp;lt;&amp;sol;th&amp;gt;\r&amp;NewLine;\r&amp;NewLine;       &amp;lt;&amp;sol;tr&amp;gt;\r&amp;NewLine;\r&amp;NewLine;    &amp;lt;&amp;sol;thead&amp;gt;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;\r&amp;NewLine;    &amp;lt;tbody&amp;gt;\r&amp;NewLine;\r&amp;NewLine;       &amp;lt;&amp;quest;php \r&amp;NewLine;\r&amp;NewLine;            while &amp;lpar;  &amp;dollar;row &amp;equals;  mysql&amp;lowbar;fetch&amp;lowbar;assoc&amp;lpar;&amp;dollar;records&amp;rpar;    &amp;rpar;\r&amp;NewLine;\r&amp;NewLine;            &amp;lbrace;\r&amp;NewLine;\r&amp;NewLine;                &amp;dollar;projects&amp;lbrack;&amp;rsqb; &amp;equals; &amp;dollar;row&amp;semi;\r&amp;NewLine;\r&amp;NewLine;                foreach &amp;lpar;&amp;dollar;projects as &amp;dollar;project&amp;rpar;&amp;colon;\r&amp;N', 7, '2021-09-25 07:21:08'),
(18, 4, '\"How do I modify the URL without reloading the page?\"', '\"Also, as others have suggested, you may find it useful/easier to step up a layer of abstraction with something like PDO.\r\n\r\nPlease note that the case you asked about is a fairly simple one and that more complex cases may require more complex approaches. In particular:\r\n\r\nIf you want to alter the structure of the SQL based on user input, parameterized queries are not going to help, and the escaping required is not covered by mysql_real_escape_string. In this kind of case, you would be better off passing the user&#039;s input through a whitelist to ensure only &#039;safe&#039; values are allowed through.\r\nIf you use integers from user input in a condition\"', '', 7, '2021-09-25 07:21:24'),
(19, 4, '\"How do I modify the URL without reloading the page?\"', '\"Also, as others have suggested, you may find it useful/easier to step up a layer of abstraction with something like PDO.\r\n\r\nPlease note that the case you asked about is a fairly simple one and that more complex cases may require more complex approaches. In particular:\r\n\r\nIf you want to alter the structure of the SQL based on user input, parameterized queries are not going to help, and the escaping required is not covered by mysql_real_escape_string. In this kind of case, you would be better off passing the user&#039;s input through a whitelist to ensure only &#039;safe&#039; values are allowed through.\r\nIf you use integers from user input in a condition\"', '                       &lt;?php\r\n\r\n     $projects = array();\r\n\r\n     // fetch data from the database\r\n\r\n     $records = mysql_query(&#039;select project_num, project_status, project_name from tblprojects&#039;) or die(&quot;Query fail: &quot; . mysqli_error());\r\n\r\n?&gt;\r\n\r\n\r\n\r\n\r\n\r\n&lt;table  class=&quot;table table-striped table-condensed&quot; id=&quot;tblData&quot;&gt;\r\n\r\n    &lt;thead&gt;\r\n\r\n        &lt;tr&gt;\r\n\r\n            &lt;th&gt;Project Name&lt;/th&gt;\r\n\r\n            &lt;th&gt;Project Number&lt;/th&gt;\r\n\r\n            &lt;th&gt;Project Status&lt;/th&gt;\r\n\r\n       &lt;/tr&gt;\r\n\r\n    &lt;/thead&gt;\r\n\r\n\r\n\r\n    &lt;tbody&gt;\r\n\r\n       &lt;?php \r\n\r\n            while (  $row =  mysql_fetch_assoc($records)    )\r\n\r\n            {\r\n\r\n                $projects[] = $row;\r\n\r\n                foreach ($projects as $project):\r\n\r\n      ?&gt;\r\n\r\n        &lt;tr&gt;\r\n\r\n            &lt;td&gt;&lt;?echo $project[&#039;proj_name&#039;]; ?&gt;&lt;/td&gt;\r\n\r\n            &lt;td&gt;&amp;am                       \r\n', 7, '2021-09-25 07:21:49'),
(20, 4, '\"How do I modify the URL without reloading the page?\"', '\"Also, as others have suggested, you may find it useful/easier to step up a layer of abstraction with something like PDO.\r\n\r\nPlease note that the case you asked about is a fairly simple one and that more complex cases may require more complex approaches. In particular:\r\n\r\nIf you want to alter the structure of the SQL based on user input, parameterized queries are not going to help, and the escaping required is not covered by mysql_real_escape_string. In this kind of case, you would be better off passing the user&#039;s input through a whitelist to ensure only &#039;safe&#039; values are allowed through.\r\nIf you use integers from user input in a condition\"', '                       &lt;?php\r\n\r\n     $projects = array();\r\n\r\n     // fetch data from the database\r\n\r\n     $records = mysql_query(&#039;select project_num, project_status, project_name from tblprojects&#039;) or die(&quot;Query fail: &quot; . mysqli_error());\r\n\r\n?&gt;\r\n\r\n\r\n\r\n\r\n\r\n&lt;table  class=&quot;table table-striped table-condensed&quot; id=&quot;tblData&quot;&gt;\r\n\r\n    &lt;thead&gt;\r\n\r\n        &lt;tr&gt;\r\n\r\n            &lt;th&gt;Project Name&lt;/th&gt;\r\n\r\n            &lt;th&gt;Project Number&lt;/th&gt;\r\n\r\n            &lt;th&gt;Project Status&lt;/th&gt;\r\n\r\n       &lt;/tr&gt;\r\n\r\n    &lt;/thead&gt;\r\n\r\n\r\n\r\n    &lt;tbody&gt;\r\n\r\n       &lt;?php \r\n\r\n            while (  $row =  mysql_fetch_assoc($records)    )\r\n\r\n            {\r\n\r\n                $projects[] = $row;\r\n\r\n                foreach ($projects as $project):\r\n\r\n      ?&gt;\r\n\r\n        &lt;tr&gt;\r\n\r\n            &lt;td&gt;&lt;?echo $project[&#039;proj_name&#039;]; ?&gt;&lt;/td&gt;\r\n\r\n            &lt;td&gt;&amp;am                       \r\n', 7, '2021-09-25 07:23:05'),
(21, 4, '\"How do I modify the URL without reloading the page?\"', '\"Also, as others have suggested, you may find it useful/easier to step up a layer of abstraction with something like PDO.\r\n\r\nPlease note that the case you asked about is a fairly simple one and that more complex cases may require more complex approaches. In particular:\r\n\r\nIf you want to alter the structure of the SQL based on user input, parameterized queries are not going to help, and the escaping required is not covered by mysql_real_escape_string. In this kind of case, you would be better off passing the user&#039;s input through a whitelist to ensure only &#039;safe&#039; values are allowed through.\r\nIf you use integers from user input in a condition\"', '                       &lt;?php\r\n\r\n     $projects = array();\r\n\r\n     // fetch data from the database\r\n\r\n     $records = mysql_query(&#039;select project_num, project_status, project_name from tblprojects&#039;) or die(&quot;Query fail: &quot; . mysqli_error());\r\n\r\n?&gt;\r\n\r\n\r\n\r\n\r\n\r\n&lt;table  class=&quot;table table-striped table-condensed&quot; id=&quot;tblData&quot;&gt;\r\n\r\n    &lt;thead&gt;\r\n\r\n        &lt;tr&gt;\r\n\r\n            &lt;th&gt;Project Name&lt;/th&gt;\r\n\r\n            &lt;th&gt;Project Number&lt;/th&gt;\r\n\r\n            &lt;th&gt;Project Status&lt;/th&gt;\r\n\r\n       &lt;/tr&gt;\r\n\r\n    &lt;/thead&gt;\r\n\r\n\r\n\r\n    &lt;tbody&gt;\r\n\r\n       &lt;?php \r\n\r\n            while (  $row =  mysql_fetch_assoc($records)    )\r\n\r\n            {\r\n\r\n                $projects[] = $row;\r\n\r\n                foreach ($projects as $project):\r\n\r\n      ?&gt;\r\n\r\n        &lt;tr&gt;\r\n\r\n            &lt;td&gt;&lt;?echo $project[&#039;proj_name&#039;]; ?&gt;&lt;/td&gt;\r\n\r\n            &lt;td&gt;&amp;am                       \r', 7, '2021-09-25 07:25:49'),
(22, 4, '\"How does PHP &#039;foreach&#039; actually work?\"', '\"Let me prefix this by saying that I know what foreach is, does and how to use it. This question concerns how it works under the bonnet, and I don&#039;t want any answers along the lines of &quot;this is how you loop an array with foreach&quot;.\"', '\"foreach ($it as $k =&gt; $v) { /* ... */ }\r\n\r\n/* translates to: */\r\n\r\nif ($it instanceof IteratorAggregate) {\r\n    $it = $it-&gt;getIterator();\r\n}\r\nfor ($it-&gt;rewind(); $it-&gt;valid(); $it-&gt;next()) {\r\n    $v = $it-&gt;current();\r\n    $k = $it-&gt;key();\r\n    /* ... */\r\n}\"', 7, '2021-09-25 07:37:45'),
(23, 4, '\"How does PHP &#039;foreach&#039; actually work?\"', '\"Let me prefix this by saying that I know what foreach is, does and how to use it. This question concerns how it works under the bonnet, and I don&#039;t want any answers along the lines of &quot;this is how you loop an array with foreach&quot;.\"', '\"foreach ($it as $k =&gt; $v) { /* ... */ }\r\n\r\n/* translates to: */\r\n\r\nif ($it instanceof IteratorAggregate) {\r\n    $it = $it-&gt;getIterator();\r\n}\r\nfor ($it-&gt;rewind(); $it-&gt;valid(); $it-&gt;next()) {\r\n    $v = $it-&gt;current();\r\n    $k = $it-&gt;key();\r\n    /* ... */\r\n}\"', 7, '2021-09-25 07:39:24'),
(24, 4, '\"How does PHP &#039;foreach&#039; actually work?\"', '\"Let me prefix this by saying that I know what foreach is, does and how to use it. This question concerns how it works under the bonnet, and I don&#039;t want any answers along the lines of &quot;this is how you loop an array with foreach&quot;.\"', 'foreach ($it as $k =&gt; $v) { /* ... */ }\r\n\r\n/* translates to: */\r\n\r\nif ($it instanceof IteratorAggregate) {\r\n    $it = $it-&gt;getIterator();\r\n}\r\nfor ($it-&gt;rewind(); $it-&gt;valid(); $it-&gt;next()) {\r\n    $v = $it-&gt;current();\r\n    $k = $it-&gt;key();\r\n    /* ... */\r\n}', 7, '2021-09-25 07:40:33'),
(25, 4, '\"How does PHP &#039;foreach&#039; actually work?\"', '\"Let me prefix this by saying that I know what foreach is, does and how to use it. This question concerns how it works under the bonnet, and I don&#039;t want any answers along the lines of &quot;this is how you loop an array with foreach&quot;.\"', 'foreach ($it as $k =&gt; $v) { /* ... */ }\r\n\r\n/* translates to: */\r\n\r\nif ($it instanceof IteratorAggregate) {\r\n    $it = $it-&gt;getIterator();\r\n}\r\nfor ($it-&gt;rewind(); $it-&gt;valid(); $it-&gt;next()) {\r\n    $v = $it-&gt;current();\r\n    $k = $it-&gt;key();\r\n    /* ... */\r\n}', 7, '2021-09-25 07:51:41'),
(26, 4, '\"nodejs express.js cannot get /1.jpg error\"', '\"json worked (https://virus.has-no-bra.in/5aZ8fM0k5.png) but cannot get image (https://virus.has-no-bra.in/5aZ90HlbO.png) and i have 37.jpg file (https://virus.has-no-bra.in/5aZ9l_gt7.png)\"', 'app.get(&#039;/&#039;, function(req, res) {\r\n\r\n  list(`./img`,(images)=&gt;{\r\n  if(images.error) throw images.error;\r\n  var floppa = images.files\r\n  let random = Math.floor((Math.random() * floppa.length))\r\n\r\n  var file = `domain${floppa[random]}`\r\n  res.json(\r\n    {\r\n      image: file\r\n    }\r\n    )\r\n});\r\n})', 7, '2021-09-25 18:39:30'),
(27, 4, '\"How to take Inputs of Dynamically Created Textbox on php and store them in MySQL using loop?\"', '\"My problems:\r\n\r\nMy aim is to receive all the value of textbox0, textbox1,..etc. by using loop in page.php.\r\n\r\nBut I am not able to get the desired result. Actually after submitting, Pape.php appears empty. After receiving all, I also want them to store in MySQL Database.\r\nWhenever I delete a textbox the sequence of the textboxes&#039; id doesn&#039;t change.\r\nPlease tell me what to do.\"', '&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;title&gt;Test&lt;/title&gt;\r\n&lt;/head&gt;\r\n\r\n&lt;script language=&quot;javascript&quot;&gt;\r\n    var count = 1;\r\n\r\nfunction addRow(divId) {\r\n\r\n\r\n\r\n    var parentDiv = document.getElementById(divId);\r\n\r\n    var eleDiv = document.createElement(&quot;div&quot;);\r\n    eleDiv.setAttribute(&quot;name&quot;, &quot;olddiv&quot;);\r\n    eleDiv.setAttribute(&quot;id&quot;, &quot;olddiv&quot;);\r\n\r\n    var eleText = document.createElement(&quot;input&quot;);\r\n    eleText.setAttribute(&quot;type&quot;, &quot;text&quot;);\r\n    eleText.setAttribute(&quot;name&quot;, &#039;textbox&#039; + count);\r\n    eleText.setAttribute(&quot;id&quot;, &quot;textbox&quot; + count);\r\n\r\n    var eleBtn = document.createElement(&quot;input&quot;);\r\n    eleBtn.setAttribute(&quot;type&quot;, &quot;button&quot;);\r\n    eleBtn.setAttribute(&quot;value&quot;, &quot;delete&quot;);\r\n    eleBtn.setAttribute(&quot;name&quot;, &quot;button&quot;);\r\n    eleBtn.setAttribute(&quot;id&quot;, &quot;button&quot;);\r\n    eleBtn.setAttribute(&quot;onclick&quot;, &quot;deleteRow(&#039;button&#039;)&quot;);\r\n\r\n    parentDiv.appendChild(eleDiv);\r\n\r\n    eleDiv.appendChild(eleText);\r\n    eleDiv.appendChild(eleBtn);\r\n\r\n    var golu=count.toString();\r\n    document.getElementById(&quot;h&quot;).value= golu;\r\n    count++;\r\n\r\n}\r\n\r\nfunction deleteRow(tableID) {\r\n        var div = document.getElementById(&#039;olddiv&#039;);\r\n        if (div) {\r\n            div.parentNode.removeChild(div);\r\n        }\r\n        var golu=count.toString();\r\n    document.getElementById(&quot;h&quot;).value= golu;\r\n}\r\n\r\nvar golu=count.toString();\r\n    document.getElementById(&quot;h&quot;).value= golu;\r\n\r\n\r\n\r\n&lt;/script&gt;\r\n&lt;body&gt;\r\n&lt;form action=&quot;Page.php&quot; method=&quot;post&quot;&gt;\r\n&lt;input type=&quot;button&quot; value=&quot;Add Row&quot; onclick=&quot;addRow(&#039;dataTable&#039;)&quot; /&gt;\r\n&lt;div id=&quot;dataTable&quot;&gt;&lt;INPUT type=&quot;text&quot; name=&quot;textbox0&quot; id=&quot;te', 10, '2021-09-27 10:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `opt_id` int(11) NOT NULL,
  `option_det` varchar(255) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `ans_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`opt_id`, `option_det`, `ques_id`, `ans_id`) VALUES
(1, 'Web services data', 1, 'd'),
(2, 'Cookies', 1, 'd'),
(3, 'Input data from a form', 1, 'd'),
(4, 'All of the Above', 1, 'd'),
(5, 'Depends on the standard', 2, 'd'),
(6, 'Depends on the compiler', 2, 'd'),
(7, 'False', 2, 'd'),
(8, 'True', 2, 'd'),
(9, '0 or 1', 3, 'a'),
(10, 'True or False', 3, 'a'),
(11, '0 if expression is false and any positive number if expression is true', 3, 'a'),
(12, 'None of the above', 3, 'a'),
(13, '=', 4, 'a'),
(14, '||', 4, 'a'),
(15, '==', 4, 'a'),
(16, '!=', 4, 'a'),
(17, 'float', 5, 'c'),
(18, 'strings', 5, 'c'),
(19, 'structure', 5, 'c'),
(20, 'long', 5, 'c'),
(21, 'Any character set', 6, 'a'),
(22, 'Ascii and utf-8 but not EBSIDIC character set', 6, 'a'),
(23, 'Unicode character set', 6, 'a'),
(24, 'Ascii character set', 6, 'a'),
(25, 'From double to char', 7, 'c'),
(26, 'From negative int to char', 7, 'c'),
(27, 'From float to char pointer', 7, 'c'),
(28, 'From char to int', 7, 'c'),
(29, 'From char to int', 8, 'c'),
(30, 'From char to short', 8, 'c'),
(31, 'From int to char', 8, 'c'),
(32, 'From int to float', 8, 'c'),
(33, 'Narrowing conversions', 9, 'c'),
(34, 'Widening conversions', 9, 'c'),
(35, 'All of the above', 9, 'c'),
(36, 'None of the above', 9, 'c'),
(37, 'char *str;', 10, 'b'),
(38, 'String str;', 10, 'b'),
(39, 'float str = 3e2;', 10, 'b'),
(40, 'None of the above', 10, 'b'),
(41, 'Simula57', 11, 'b'),
(42, 'Simula67', 11, 'b'),
(43, 'Simula47', 11, 'b'),
(44, 'Simula87', 11, 'b'),
(45, 'Improved C', 12, 'd'),
(46, 'Integrated C', 12, 'd'),
(47, 'C with Simula', 12, 'd'),
(48, 'C with classes', 12, 'd'),
(49, 'Identifiers', 13, 'a'),
(50, 'Keywords', 13, 'a'),
(51, 'Constraints', 13, 'a'),
(52, 'Strings', 13, 'a'),
(53, '1', 14, 'c'),
(54, '-1', 14, 'c'),
(55, '0', 14, 'c'),
(56, 'none of the above', 14, 'c'),
(57, '*/ Comment-text */', 15, 'd'),
(58, '{ Comment-text }', 15, 'd'),
(59, '** Comment-text **', 15, 'd'),
(60, '/* Comment-text */', 15, 'd'),
(61, '#define_constant', 16, 'd'),
(62, '#constant_define', 16, 'd'),
(63, '#constant', 16, 'd'),
(64, '#define', 16, 'd'),
(65, 'start()', 17, 'b'),
(66, 'main()', 17, 'b'),
(67, 'system()', 17, 'b'),
(68, 'program()', 17, 'b'),
(69, 'It inherit other class', 18, 'd'),
(70, 'It has a pointer variable', 18, 'd'),
(71, 'It is the first class declared', 18, 'd'),
(72, 'Another class got inherit from this class', 18, 'd'),
(73, 'Class has noting to do with object', 19, 'c'),
(74, 'It just have declaration of few variables', 19, 'c'),
(75, 'Class in a collection of objects', 19, 'c'),
(76, 'none of the above', 19, 'c'),
(78, 'stricture', 20, 'c'),
(79, 'pointer', 20, 'c'),
(80, 'all the above', 20, 'c'),
(81, 'Improved C', 21, 'd'),
(82, 'Integrated C', 21, 'd'),
(83, 'C with Simula', 21, 'd'),
(84, 'C with classes', 21, 'd'),
(85, 'static', 22, 'a'),
(86, 'this', 22, 'a'),
(87, 'friend', 22, 'a'),
(88, 'none of the above', 22, 'a'),
(89, 'To facilitate the re usability of code', 23, 'a'),
(90, 'To extend the capabilities of a class', 23, 'a'),
(91, 'To facilitate the conversion of data types', 23, 'a'),
(92, 'To help modular programming', 23, 'a'),
(93, 'we want to have access to unrelated classes', 24, 'd'),
(94, 'dynamic binding is required', 24, 'd'),
(95, 'we want to create versatile overloaded operators.', 24, 'd'),
(96, 'we want to exchange data between classes', 24, 'd'),
(97, '-&gt;', 25, 'd'),
(98, '&gt;&gt;', 25, 'd'),
(99, '.', 25, 'd'),
(100, '::', 25, 'd'),
(101, 'float', 26, 'c'),
(102, 'int', 26, 'c'),
(103, 'real', 26, 'c'),
(104, 'double', 26, 'c'),
(105, '||', 27, 'c'),
(106, '&', 27, 'c'),
(107, '&&', 27, 'c'),
(108, '&|', 27, 'c'),
(109, 'member y of object x', 28, 'a'),
(110, 'member x of object y', 28, 'a'),
(111, 'member y of object pointed by x', 28, 'a'),
(112, 'all the above', 28, 'a'),
(113, ':', 29, 'c'),
(114, '.', 29, 'c'),
(115, ';', 29, 'c'),
(116, 'none of the above', 29, 'c'),
(117, 'Global variables', 30, 'a'),
(118, 'Universal variables', 30, 'a'),
(119, 'Local variables', 30, 'a'),
(120, 'All variables', 30, 'a'),
(121, '8', 31, 'd'),
(122, '4', 31, 'd'),
(123, '2', 31, 'd'),
(124, '1', 31, 'd'),
(125, 'Addition', 32, 'a'),
(126, 'Division', 32, 'a'),
(127, 'Multiplication', 32, 'a'),
(128, 'none of the above', 32, 'a'),
(129, '1', 33, 'a'),
(130, '0', 33, 'a'),
(131, '2', 33, 'a'),
(132, '3', 33, 'a'),
(133, 'a boolean expression', 34, 'a'),
(134, 'an integer expression', 34, 'a'),
(135, 'a boolean or an integer expression', 34, 'a'),
(136, 'none of the above', 34, 'a'),
(137, 'Class objects', 35, 'd'),
(138, 'Reference variable', 35, 'd'),
(139, 'Arrays', 35, 'd'),
(140, 'Header files', 35, 'd'),
(141, '.phpf', 36, 'd'),
(142, '.ph', 36, 'd'),
(143, '.p', 36, 'd'),
(144, '.php', 36, 'd'),
(145, 'Drek Kolkevi', 37, 'd'),
(146, 'List Barely', 37, 'd'),
(147, 'Willam Makepiece', 37, 'd'),
(148, 'Rasmus Lerdorf', 37, 'd'),
(149, 'Pretext Hypertext Processor', 38, 'b'),
(150, 'Hypertext Preprocessor', 38, 'b'),
(151, 'Preprocessor Home Page', 38, 'b'),
(152, 'None of the above', 38, 'b'),
(153, '&lt; ? php | ?&gt;', 39, 'c'),
(154, '&lt; php &gt;', 39, 'c'),
(155, '&lt;?php ?&gt;', 39, 'c'),
(156, 'All of the above', 39, 'c'),
(157, 'PHP 6', 40, 'c'),
(158, 'PHP 5.3', 40, 'c'),
(159, 'PHP 5', 40, 'c'),
(160, 'PHP 4', 40, 'c'),
(161, 'Hypertext Preprocessor', 41, 'a'),
(162, 'Pretext Hypertext Processor', 41, 'a'),
(163, 'Preprocessor Home Page', 41, 'a'),
(164, 'None of the Above', 41, 'a'),
(165, '.xml', 42, 'c'),
(166, '.ph', 42, 'c'),
(167, '.php', 42, 'c'),
(168, '.html', 42, 'c'),
(169, '&lt; ? php ?&gt;', 43, 'c'),
(170, ' &lt; php &gt;', 43, 'c'),
(171, '&lt;?php ?&gt;', 43, 'c'),
(172, 'All of the Above', 43, 'c'),
(173, 'PDT', 44, 'c'),
(174, 'Adobe Dreamweaver', 44, 'c'),
(175, 'Notepad++', 44, 'c'),
(176, 'Notepad', 44, 'c'),
(177, 'Apache', 45, 'd'),
(178, 'IIS', 45, 'd'),
(179, 'PHP', 45, 'd'),
(180, 'All of the Above', 45, 'd'),
(181, 'printf (\"Hello World\");', 46, 'd'),
(182, 'echo (\"Hello World\");', 46, 'd'),
(183, 'print (\"Hello World\");', 46, 'd'),
(184, 'All of the Above', 46, 'd'),
(185, 'PHP 6', 47, 'c'),
(186, 'PHP 5.3', 47, 'c'),
(187, 'PHP 5', 47, 'c'),
(188, 'PHP 4', 47, 'c'),
(189, '.function()', 48, 'd'),
(190, '.function()', 48, 'd'),
(191, '$function()', 48, 'd'),
(192, 'all the above', 48, 'd'),
(193, 'array_search()', 49, 'd'),
(194, 'array_slice()', 49, 'd'),
(195, 'array_shift()', 49, 'd'),
(196, 'array_reverse()', 49, 'd'),
(197, 'User Defined Function', 50, 'd'),
(198, 'Default Function', 50, 'd'),
(199, 'Inbuilt Function', 50, 'd'),
(200, 'Magic Function', 50, 'd'),
(201, 'get_argc()', 51, 'd'),
(202, 'get_argv()', 51, 'd'),
(203, 'func_get_argv()', 51, 'd'),
(204, 'func_get_argc()', 51, 'd'),
(205, 'get_file()', 52, 'd'),
(206, 'fold()', 52, 'd'),
(207, 'file()', 52, 'd'),
(208, 'glob()', 52, 'd'),
(209, 'get_memory_peak_usage()', 53, 'd'),
(210, 'get_usage()', 53, 'd'),
(211, 'get_peak_usage()', 53, 'd'),
(212, 'get_memory_usage()', 53, 'd'),
(213, 'mdid()', 54, 'd'),
(214, 'md5()', 54, 'd'),
(215, 'id()', 54, 'd'),
(216, 'uniqueid()', 54, 'd'),
(217, 'gzcompress()', 55, 'a'),
(218, 'compress()', 55, 'a'),
(219, 'zip()', 55, 'a'),
(220, 'zip_compress()', 55, 'a'),
(221, 'Brendan Eich', 56, 'a'),
(222, 'Helsinki, Linus', 56, 'a'),
(223, 'W3 Group', 56, 'a'),
(224, 'James Gosling', 56, 'a'),
(225, 'Google Lab', 57, 'b'),
(226, 'Netscape', 57, 'b'),
(227, 'AT&T Bell LAb', 57, 'b'),
(228, 'Sun Microsystem', 57, 'b'),
(229, 'Oak', 58, 'c'),
(230, 'ActionScript', 58, 'c'),
(231, 'Mocha', 58, 'c'),
(232, 'Sencha', 58, 'c'),
(233, 'Internet Explorer 2.0', 59, 'c'),
(234, 'Internet Explorer 1.0', 59, 'c'),
(235, 'Netscape Navigator 2.0', 59, 'c'),
(236, 'Netscape Navigator 1.0', 59, 'c'),
(237, 'JScript', 60, 'a'),
(238, 'MS JavaScript', 60, 'a'),
(239, 'Advanced JavaScript', 60, 'a'),
(240, 'MJavaScript', 60, 'a'),
(241, 'Breakpoint in JS', 61, 'c'),
(242, 'Line in JS', 61, 'c'),
(243, 'Statement in JavaScript', 61, 'c'),
(244, 'None of the above', 61, 'c'),
(245, 'JVM', 62, 'd'),
(246, 'Compiler', 62, 'd'),
(247, 'Server', 62, 'd'),
(248, 'Browser', 62, 'd'),
(249, 'Comma', 63, 'd'),
(250, 'Full Stop', 63, 'd'),
(251, 'Slash', 63, 'd'),
(252, 'Semicolon', 63, 'd'),
(253, 'Executable Statements', 64, 'd'),
(254, 'Method Calls', 64, 'd'),
(255, 'HTML Tags', 64, 'd'),
(256, 'All of the above', 64, 'd'),
(257, 'Executable Statement', 65, 'c'),
(258, 'Assignment Statement', 65, 'c'),
(259, 'Declaration Statemens', 65, 'c'),
(260, 'Conditional Statement', 65, 'c'),
(261, 'Assignment Statement', 66, 'a'),
(262, 'Declaration Statement', 66, 'a'),
(263, 'Executable Statement', 66, 'a'),
(264, 'Conditional Statement', 66, 'a'),
(265, 'Pair of Curly braces', 67, 'a'),
(266, 'Pair of Square Brackets', 67, 'a'),
(267, 'Pair of Round Brackets', 67, 'a'),
(268, 'None of the above', 67, 'a'),
(269, 'Pair of Curly braces', 68, 'a'),
(270, 'Pair of Square Brackets', 68, 'a'),
(271, 'Pair of Round Brackets', 68, 'a'),
(272, 'None of the above', 68, 'a'),
(273, 'Code Block', 69, 'd'),
(274, 'Cluster', 69, 'd'),
(275, 'Group', 69, 'd'),
(276, 'Statement Block', 69, 'd'),
(277, 'Single Line Commens', 70, 'c'),
(278, 'Multiple Line Comments', 70, 'c'),
(279, 'All of the above', 70, 'c'),
(280, 'None of the above', 70, 'c'),
(281, '\"#\"', 71, '2'),
(282, '\"\"', 71, '2'),
(283, '\"//\"', 71, '2'),
(284, '\"$$\"', 71, '2'),
(285, 'End of Line', 72, '1'),
(286, 'End of Statement', 72, '1'),
(287, 'Semicolon', 72, '1'),
(288, 'None of the above', 72, '1'),
(289, 'Compiler', 73, 'd'),
(290, 'JVM', 73, 'd'),
(291, 'Operating System', 73, 'd'),
(292, 'Browser', 73, 'd'),
(293, 'Non Important', 74, 'b'),
(294, 'Non Executable', 74, 'b'),
(295, 'Executive', 74, 'b'),
(296, 'Non Usable', 74, 'b'),
(297, '===', 75, 'a'),
(298, '&lt;&lt;=', 75, 'a'),
(299, '+=', 75, 'a'),
(300, '&gt;&gt;=', 75, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ques_id` int(11) NOT NULL,
  `ques_title` varchar(200) NOT NULL,
  `ans_id` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ques_id`, `ques_title`, `ans_id`, `cat_id`) VALUES
(11, 'C++ is an extension of C with a major addition of the class construct feature of', 'b', 4),
(12, 'C++ has the name _____ before it was changed to C++.', 'd', 4),
(13, ' _____ refer to the names of variables, functions, arrays, classes etc. created by the programmer.', 'a', 4),
(14, 'What is the correct value to return to the operating system upon the successful completion of a program ?', 'c', 4),
(15, 'Which of the following is a correct comment ?', 'd', 4),
(16, 'How we define our name for constants in C++ ?', 'd', 4),
(17, 'Every C++ programs must contain', 'b', 4),
(18, 'What is the meaning of base class in C++ ?', 'd', 4),
(19, 'What is a class in C++ ?', 'c', 4),
(20, 'Reference is like a', 'c', 4),
(21, 'C++ has the name _____ before it was changed to C++.', 'd', 4),
(22, 'Which class has only one unique value for all the objects of class ?', 'a', 4),
(23, 'The major goal of inheritance in C++ is', 'a', 4),
(24, 'The friend functions are used in situations where', 'd', 4),
(25, 'Which operator is used to define a member of a class from outside the class definition ?', 'd', 4),
(26, 'Which is not a correct variable type in C++ ?', 'c', 4),
(27, 'Which is boolean operator for logical and ?', 'c', 4),
(28, 'In C++, the expression x.y represents as', 'a', 4),
(29, 'How we mark the end of c++ statement ?', 'c', 4),
(30, 'Which type of variables can be referred from anywhere in the c++ code ?', 'a', 4),
(31, 'What is the value of sizeof(char) ?', 'd', 4),
(32, 'Which arithmetic operation can be done in pointer ?', 'a', 4),
(33, 'If m and n are int type variables, what will be the result of the expression.m%n (when m=5 and n=2)', 'a', 4),
(34, 'Which of the following control expressions are valid for an if statement ?', 'a', 4),
(35, 'Which of the following cannot be passed to a function ? Class objects', 'd', 4),
(36, 'PHP files have a default file extension of', 'd', 2),
(37, 'Who is the father of PHP ?', 'd', 2),
(38, 'What does PHP stand for ?', 'b', 2),
(39, 'A PHP script should start with _____ and end with _____.', 'c', 2),
(40, 'Which version of PHP introduced Try/catch Exception ?', 'c', 2),
(41, 'What does PHP stand for ?', 'a', 2),
(42, 'PHP files have a default file extension of', 'c', 2),
(43, 'A PHP script should start with _____ and end with _____', 'c', 2),
(44, 'Which of the following is/are a PHP code editor ?', 'c', 2),
(45, ' Which of the following must be installed on your computer so as to run PHP script ?', 'd', 2),
(46, 'Which of the following PHP statements will output Hello World on the screen ?', 'd', 2),
(47, 'Type Hinting was introduced in which version of PHP ?', 'c', 2),
(48, 'Which of the following are valid function names ?', 'd', 2),
(49, 'Which of the following function can be used to get an array in the reverse order ?', 'd', 2),
(50, 'A function in PHP which starts with __ (double underscore) is know as', 'd', 2),
(51, 'Which one of the following PHP functions can be used to build a function that accepts any number of arguments ?', 'd', 2),
(52, 'Which one of the following PHP functions can be used to find files ?', 'd', 2),
(53, 'Which of the following PHP functions can be used to get the current memory usage ?', 'd', 2),
(54, 'Which of the following PHP functions can be used for generating unique id ?', 'd', 2),
(55, 'Which one of the following functions can be used to compress a string ?', 'a', 2),
(56, 'JavaScript is invented by', 'a', 3),
(57, ' JavaScript was invented at _____ Lab.', 'b', 3),
(58, 'JavaScript was originally developed under the name ', 'c', 3),
(59, 'In March 1996, _____ was released, featuring support for JavaScript.', 'c', 3),
(60, ' Microsoft Developed a compatible dialect of JavaScript called', 'a', 3),
(61, 'Executable single line of Script is called as', 'c', 3),
(62, 'JavaScript Statements are executed by', 'd', 3),
(63, 'Java Statement terminated by', 'd', 3),
(64, 'JavaScript code contain sequence of', 'd', 3),
(65, 'Which of the following statement is used to declare variable in JavaScript ?', 'c', 3),
(66, '_____ is used to assign value to the variable', 'a', 3),
(67, ' Multiple JS statements are written inside pair of _____ to form a statement block.', 'a', 3),
(68, ' Multiple JS statements are written inside pair of _____ to form a statement block.', 'a', 3),
(69, 'Group of JavaScript Statements is called as', 'd', 3),
(70, 'avaScript have following type of Comment(s).', 'c', 3),
(71, 'Single Line Comment Starts with _____ Symbol.', '2', 3),
(72, 'Which of the following is considered as End of Single line comment ?', '1', 3),
(73, 'Comments in JS are ignored by Compiler', 'd', 3),
(74, 'Comment Statement is _____ type of statement.', 'b', 3),
(75, 'Which of the following is not a compound assignment operator ?', 'a', 3),
(601, 'C++ is an extension of C with a major addition of the class construct feature of', 'b', 5),
(602, 'C++ has the name _____ before it was changed to C++.', 'd', 5),
(603, ' _____ refer to the names of variables, functions, arrays, classes etc. created by the programmer.', 'a', 5),
(604, 'What is the correct value to return to the operating system upon the successful completion of a program ?', 'c', 5),
(605, 'Which of the following is a correct comment ?', 'd', 5),
(606, 'How we define our name for constants in C++ ?', 'd', 5),
(607, 'Every C++ programs must contain', 'b', 5),
(608, 'What is the meaning of base class in C++ ?', 'd', 5),
(609, 'What is a class in C++ ?', 'c', 5),
(610, 'Reference is like a', 'c', 5),
(611, 'C++ has the name _____ before it was changed to C++.', 'd', 5),
(612, 'Which class has only one unique value for all the objects of class ?', 'a', 5),
(613, 'The major goal of inheritance in C++ is', 'a', 5),
(614, 'The friend functions are used in situations where', 'd', 5),
(615, 'Which operator is used to define a member of a class from outside the class definition ?', 'd', 5),
(616, 'Which is not a correct variable type in C++ ?', 'c', 5),
(617, 'Which is boolean operator for logical and ?', 'c', 5),
(618, 'In C++, the expression x.y represents as', 'a', 5),
(619, 'How we mark the end of c++ statement ?', 'c', 5),
(620, 'Which type of variables can be referred from anywhere in the c++ code ?', 'a', 5),
(621, 'What is the value of sizeof(char) ?', 'd', 5),
(622, 'Which arithmetic operation can be done in pointer ?', 'a', 5),
(623, 'If m and n are int type variables, what will be the result of the expression.m%n (when m=5 and n=2)', 'a', 5),
(624, 'Which of the following control expressions are valid for an if statement ?', 'a', 5),
(625, 'Which of the following cannot be passed to a function ? Class objects', 'd', 5);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `total_ques` int(11) NOT NULL,
  `right_ans` int(11) NOT NULL,
  `wrong_ans` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `time` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `cat_name`, `cat_id`, `total_ques`, `right_ans`, `wrong_ans`, `u_id`, `time`, `date`, `points`) VALUES
(1, 'ffgg', 233, 33, 3, 3, 3, 3, '0000-00-00 00:00:00', 0),
(2, '44', 4, 4, 44, 4, 4, 4, '0000-00-00 00:00:00', 0),
(3, 'PHP', 2, 10, 1, 0, 2, 0, '0000-00-00 00:00:00', 7),
(4, 'PHP', 2, 10, 0, 1, 2, 0, '0000-00-00 00:00:00', 5),
(5, 'PHP', 2, 10, 1, 0, 2, 0, '0000-00-00 00:00:00', 7),
(6, 'PHP', 2, 10, 0, 1, 2, 0, '0000-00-00 00:00:00', 5),
(7, 'PHP', 2, 10, 1, 0, 2, 0, '0000-00-00 00:00:00', 7),
(8, 'PHP', 2, 10, 1, 4, 2, 1, '0000-00-00 00:00:00', 7),
(9, 'PHP', 2, 10, 1, 5, 2, 1, '0000-00-00 00:00:00', 7),
(10, 'PHP', 2, 10, 2, 6, 2, 0.316667, '0000-00-00 00:00:00', 9),
(11, 'PHP', 2, 10, 0, 5, 2, 0.283333, '0000-00-00 00:00:00', 5),
(12, 'PHP', 2, 10, 0, 5, 2, 0.0166667, '0000-00-00 00:00:00', 5),
(13, 'PHP', 2, 10, 1, 1, 2, 0.0666667, '0000-00-00 00:00:00', 7),
(14, 'PHP', 2, 10, 0, 2, 2, 0.0833333, '0000-00-00 00:00:00', 5),
(15, 'PHP', 2, 10, 1, 1, 2, 0.05, '0000-00-00 00:00:00', 7),
(16, 'PHP', 2, 10, 1, 2, 2, 0.0833333, '0000-00-00 00:00:00', 7),
(17, 'PHP', 2, 10, 2, 3, 2, 0.166667, '0000-00-00 00:00:00', 9),
(18, 'PHP', 2, 10, 1, 4, 2, 0.266667, '0000-00-00 00:00:00', 7),
(19, 'PHP', 2, 10, 1, 2, 2, 0.1, '0000-00-00 00:00:00', 7),
(20, 'PHP', 2, 10, 0, 2, 2, 480, '0000-00-00 00:00:00', 0),
(21, 'PHP', 2, 10, 0, 4, 2, 0.383333, '0000-00-00 00:00:00', 5),
(22, 'PHP', 2, 10, 0, 1, 2, 0.0166667, '0000-00-00 00:00:00', 5),
(23, 'PHP', 2, 10, 1, 0, 2, 0.55, '0000-00-00 00:00:00', 7),
(24, 'PHP', 2, 15, 1, 1, 2, 0.55, '0000-00-00 00:00:00', 7),
(25, 'PHP', 2, 15, 3, 2, 2, 2.7, '0000-00-00 00:00:00', 9),
(26, 'PHP', 2, 15, 2, 1, 2, 0.25, '0000-00-00 00:00:00', 8),
(27, 'PHP', 2, 5, 0, 1, 2, 300, '0000-00-00 00:00:00', 0),
(28, 'PHP', 2, 5, 3, 0, 2, 300, '0000-00-00 00:00:00', 12),
(29, 'PHP', 2, 5, 1, 2, 2, 0.133333, '0000-00-00 00:00:00', 9),
(30, '3', 1, 1, 1, 1, 111111, 12, '2020-08-28 12:35:58', 2),
(31, 'C++', 4, 10, 0, 1, 2, 0.316667, '2020-08-28 12:38:19', 5),
(32, 'JAVASCRIPT', 3, 5, 0, 0, 1, 0.666667, '2020-08-30 11:45:34', 5),
(33, 'C++/C', 4, 20, 1, 2, 1, 0.216667, '2020-08-30 13:47:53', 6),
(34, 'JAVASCRIPT', 3, 5, 0, 0, 1, 0.0833333, '2020-08-30 13:48:11', 5),
(35, 'PHP', 2, 15, 0, 0, 1, 0.133333, '2020-08-30 13:48:35', 5),
(36, 'C++/C', 4, 10, 1, 1, 1, 0.2, '2020-08-30 13:48:54', 7),
(37, 'JAVASCRIPT', 3, 10, 0, 0, 1, 1.16667, '2020-08-30 13:58:04', 5),
(38, 'JAVASCRIPT', 3, 5, 0, 0, 1, 0.15, '2020-08-30 14:03:44', 5),
(39, 'JAVASCRIPT', 3, 5, 0, 0, 1, 0.25, '2020-08-30 14:04:09', 5),
(40, 'JAVASCRIPT', 3, 5, 0, 0, 1, 0.1, '2020-08-30 14:04:31', 5),
(41, 'C++/C', 4, 10, 2, 1, 1, 0.183333, '2020-08-30 14:06:01', 9),
(42, 'PHP', 2, 10, 0, 0, 1, 0.25, '2020-08-30 14:06:48', 5),
(43, 'PHP', 2, 10, 0, 0, 1, 0.0833333, '2020-08-30 14:11:43', 5),
(44, 'PHP', 2, 10, 0, 0, 1, 0.2, '2020-08-30 14:12:35', 5),
(45, 'PHP', 2, 10, 0, 3, 1, 0.116667, '2020-08-30 14:15:35', 5),
(46, 'PHP', 2, 10, 0, 3, 1, 0.1, '2020-08-30 14:16:51', 5),
(47, 'JAVASCRIPT', 3, 10, 1, 4, 1, 0.183333, '2020-08-30 14:21:03', 7),
(48, 'C++/C', 4, 15, 0, 2, 1, 0.0833333, '2020-08-30 14:28:22', 5),
(49, 'C++/C', 4, 10, 0, 1, 1, 0.75, '2020-08-30 16:11:31', 5),
(50, 'C++', 4, 5, 2, 3, 1, 1.81667, '2021-09-23 05:48:09', 12),
(51, 'C++', 4, 5, 1, 0, 1, 0.1, '2021-09-23 05:48:34', 9),
(52, 'C++', 4, 5, 0, 1, 1, 5, '2021-09-23 06:24:18', 0),
(53, 'C++', 4, 5, 0, 1, 1, 5, '2021-09-23 06:24:40', 0),
(54, 'C++', 4, 5, 0, 1, 1, 5, '2021-09-23 06:25:06', 0),
(55, 'C++', 4, 5, 0, 2, 7, 0.1, '2021-09-25 17:28:39', 5),
(56, 'C++', 4, 5, 0, 1, 7, 0.1, '2021-09-25 17:33:35', 5),
(57, 'PHP', 2, 5, 1, 1, 7, 0.233333, '2021-09-25 17:43:11', 9),
(58, 'C++', 4, 10, 0, 1, 7, 1.45, '2021-09-25 17:47:55', 5),
(59, 'C++', 4, 10, 0, 3, 7, 0.633333, '2021-09-25 18:31:48', 5),
(60, 'PHP', 2, 10, 1, 1, 7, 0.3, '2021-09-25 18:35:26', 7),
(61, 'PHP', 2, 5, 0, 1, 7, 0.15, '2021-09-26 14:30:48', 5),
(62, 'C++', 4, 10, 2, 5, 7, 0.416667, '2021-09-26 14:33:35', 9),
(63, 'C++', 4, 10, 0, 2, 7, 0.2, '2021-09-27 07:59:31', 5),
(64, 'JAVASCRIPT', 3, 15, 1, 3, 10, 0.283333, '2021-09-27 10:10:51', 7),
(65, 'C++', 4, 15, 0, 7, 9, 0.65, '2021-09-27 16:10:42', 5),
(66, 'C++', 4, 10, 0, 5, 7, 0.75, '2021-09-27 17:52:36', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lame` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_num` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lame`, `gender`, `age`, `username`, `password`, `address`, `phone_num`) VALUES
(4, 'Jahir', 'Raihan', '1', 23, 'jahir34@gmail.com', '1234', 'dhaka uttara road 4', '01876123434'),
(5, 'Md Nihat', 'Uddin', '1', 21, 'nihat@457gmail.com', '1234', 'dhaka uttara road 4', '01878517664'),
(6, 'Imran', 'Uddin', '1', 23, 'imran45@gmail.com', '12345', 'dhaka uttara road 4', '01878457664'),
(7, 'Rahat', 'Uddin', '1', 0, 'rahatuddin786@gmail.com', '1234', 'dhaka uttara road 4', '01878457664'),
(8, 'Nishat', 'Tasnim', '2', 0, 'nishat56@gmail.com', '12345', 'Noakhali', '01876123434'),
(9, 'Moon', 'Moon', '2', 0, 'moonmoon45@gmail.com', 'moonmoon', 'Chadpur', '01876123434'),
(10, 'Al adnan', 'Sami', '1', 0, 'samifoodie@gmail.com', '123', 'dhaka', '01876123434'),
(11, 'Sabiha', 'Binti', '2', 0, 'sabiha96@gmail.com', 'sabiha', 'Cumilla', '01876123434');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `before_user_delete` BEFORE DELETE ON `users` FOR EACH ROW BEGIN
  INSERT INTO users_log (`user_id`, `fname`, `lame`, `gender`, `age`, `username`, `password`, `address`, `phone_num`) VALUES
(old.user_id, old.fname, old.lame, old.gender, old.age,old.username, old.password, old.address, old.phone_num);
  
   END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `password`, `timestamp`) VALUES
(1, 'rahat', '12345', '2020-08-22 15:39:19'),
(4, 'faysal', '3', '2020-08-30 16:35:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_quiz`
--
ALTER TABLE `categories_quiz`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `discussion_answers`
--
ALTER TABLE `discussion_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion_category`
--
ALTER TABLE `discussion_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `discussion_questions`
--
ALTER TABLE `discussion_questions`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `discussion_questions` ADD FULLTEXT KEY `title` (`title`,`description`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`opt_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories_quiz`
--
ALTER TABLE `categories_quiz`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discussion_answers`
--
ALTER TABLE `discussion_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `discussion_category`
--
ALTER TABLE `discussion_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discussion_questions`
--
ALTER TABLE `discussion_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `opt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2501;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=626;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
