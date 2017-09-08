<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>World Cultural Heritage</title>
    <link rel="stylesheet" type="text/css" href="../css/file.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #f4e3cb">
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="../index/index.php">Home</a></li>
                    <li class="active" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Programe
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="../programe/keynotes.php">Keynotes</a></li>
                            <li><a href="../programe/day1.php">Day 1</a></li>
                            <li><a href="../programe/day2.php">Day 2</a></li>
                            <li><a href="../programe/day3.php">Day 3</a></li>
                            <li><a href="../programe/day4.php">Day 4</a></li>
                            <li><a href="../programe/day5.php">Day 5</a></li>
                            <li><a href="../programe/day6.php">Day 6</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paper
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../paper/submission.php">Paper Submission</a></li>
                            <li><a href="../paper/info_speak.php">Info for Speakers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../registration/registration_info.php">Registration info</a></li>
                            <li><a href="../registration/registration_form.php">Registration form</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Venue
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../venue/venue_details.php">Venue Details</a></li>
                            <li><a href="../venue/accomodation.php">Accomodation</a></li>
                        </ul>
                    </li>
                    <li><a href="../exhibition/exhibitors.php">Exhibition</a></li>
                    <li><a href="../sponsors/sponsors.php">Sponsors</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) : ?>
                        <li><a href="../index/account.php">Welcome <?php echo $_SESSION['username'];?>,</a></li>
                        <li><a href="../php/logout.php">Logout </a></li>
                    <?php else : ?>
                        <li><a href="../index/login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <h1>Keynote Speakers</h1>
        <div class="row">
            <div class="col-md-12">
                <h3 style="color: gray;">Prof. Dr. Wolfgang Kippes</h3>
                <img align="left" src="../keynotes/Wolfgang-Kippes_800.jpg">
                <p>A Civil Engineer from the Technical University of Vienna, who served as CEO for the<br> <a href="https://www.schoenbrunn.at/en/" target="_blank">Schloss SchÃ¶nbrunn</a> GmbH from 1992 until 2012 (UNESCO WHL Monument).<br>He was responsible for project development, restauration and conservation, research and<br> development.<br>He has been involved in international Research and development programms such as the<br> COST C5, Indoor Climate Monitoring and Control (PREVENT), Fire protection in Historic<br> Buildings (COST C17) and of the EU project Cultural Heritage Identity Card (CHIC)<br>He served also as a member of the NFPA Cultural Resources Committee 2001 to 2012.<br>Currently, he is a visiting Prof. at the University for Applied Arts Vienna and at the Donau-<br>UniversitÃ¤t Krems.<br></p><br>

                <h3 style="color: gray;">Prof. Dr. Dieter Fellner</h3>
                <img align="left" src="../keynotes/Fellner_060Rc.png">
                <p>Since Oct 2006 Dieter Fellner is Professor of Computer Science at TU Darmstadt,<br> Germany, and Director of the <a href="https://www.igd.fraunhofer.de/en" target="_blank">Fraunhofer Institute for Computer Graphics Research<br> (IGD)</a> at the same location. Previously he has held academic positions at the Graz<br> University of Technology, Austria, the University of Technology in Braunschweig,<br> Germany, the University of Bonn, Germany, the Memorial University of Newfoundland,<br> Canada, and the University of Denver, Colorado.<br>He is still affiliated with the Graz University of Technology where he chairs the Institute of<br> Computer Graphics and Knowledge Visualization he founded in 2005. Fellner is also<br> CEO of the Fraunhofer Austria Research GmbH since November 2008 and Board<br> Member of the recently established Fraunhofer Project Centre for Interactive Digital<br> Media at Nanyang Technological University (Fraunhofer IDM@NTU) in Singapore since June 2010.<br><br>After his studies of Technical Mathematics in Graz (Diploma 1981, Doctorate 1984, Habilitation 1988) his career<br> started in the MUPID development team (1982), where he was responsible for the decoder-based videotex<br> graphics editing system. Dieter Fellner's research activities over the last years covered algorithms and software<br> architectures to integrate modeling and rendering, efficient rendering and visualization algorithms, generative and<br> reconstructive modeling, virtual and augmented reality, graphical aspects of internet-based multimedia information<br> systems and cultural heritage as well as digital libraries. In the latter field he has coordinated a strategic initiative<br> funded by the German Research Foundation (Deutsche Forschungsgemeinschaft) from 1997 till 2005. Among<br> several other R&D activities he is currently coordinating a strategic initiative (DFG Leistungszentrum) addressing<br> the challenges general documents pose on libraries and information repositories. These challenges fit well with his<br> current main focus on Visual Computing, in the academic research context as well as within the applied R&D of<br> Fraunhofer IGD.<br>He is a member of EUROGRAPHICS, ACM, IEEE Computer Society and the Gesellschaft fÃ¼r Informatik (GI)<br> where he serves as a member of the Board of Directors (erweiterter Vorstand) as well as the chairman of the<br> Graphics Chapter (Fachbereich Graphische Datenverarbeitung). Furthermore, D. Fellner is an advisor for the<br> German Research Foundation (as a member of DFG's AWBI) and the European Commission (as a member of<br> ISTAG).</p><br>

                <h3 style="color: gray;">Prof. Dr. Mustafa Erdik</h3>
                <img align="left" src="../keynotes/Mustafa_Erdik.jpg">
                <p>Mustafa Erdik is currently a Professor Emeritus of Earthquake Engineering at Kandilli<br> Observatory and Earthquake Research Institute in Bogazici University and also serves as<br> the President of the Turkish Earthquake Foundation and as adjunct faculty members at<br> Rose School in Pavia, Italy and at King Saud University in Riyadh, Saudi Arabia.<br>He has received his BSc degree in Civil Engineering from METU in Ankara Turkey and his<br> MSc and PhD degrees from Rice University in Houston, Texas, USA.<br>He has worked with UN organizations and several international foundations around the<br> world on earthquake engineering problems. He has authored and co-authored about 300<br> scientific publications including 5 books.<br>He currently serves as a member of the editorial board and as the editor-in-chief of several<br> earthquake engineering related journals.<br><br>In 1999 he was elected as the laureate of United Nation's Sasakawa Disaster Prevention Award, in 2004 he has<br> received the NATO Science for Peace â€“ Summit Prize, in 2013 he was awarded the Bruce Bolt Medal by SSA,<br> EERI and COSMOS and in 2016 he was given the Prof. Nicholas Ambraseys Distinguished Lecture Award by the<br> EAEE.<br></p><br><a href="keynotes/Earthquake_Protection_of_Museum_Displays (2).docx">Download Abstract of Presentation with title: "Earthquake Protection of Museum Displays"</a></p>

                <h3 style="color: gray;">Prof. Dr. Sarah Whatley</h3>
                <img align="left" src="../keynotes/Sarah_Image.jpg">
                <p>Professor Sarah Whatley is Director of the Centre for Dance Research (C-DaRE) at<br> Coventry University, UK. Her research interests extend to dance and new technologies,<br> intangible cultural heritage, somatic dance practice and pedagogy, dance documentation,<br> and inclusive dance practice; she has published widely on these themes. Funded by the<br> AHRC, European Commission, Leverhulme Trust and Wellcome Trust, her current<br> funded research projects focus on the creative reuse of digital cultural content, smart<br> learning environments for dancers, reimagining dance archives and dance<br> documentation, the generative potential of error in dance and HCI, dance and disability<br> and dancer imagery.<br>She is also founding Editor of the Journal of Dance and Somatic Practices and sits on the<br> Editorial Boards of several other Journals. </p><br>

                <h3 style="color: gray;">Mr. Axel Ermert</h3>
                <img align="left" src="../keynotes/Axel-Ermert-2016.jpg">
                <p>Born 1952. Studies: Sociology and Information Science in Berlin. Beginning 1977, Axel<br> has been working with DIN (German Standards Institute), in the department covering the<br> information field (publishing, libraries, archives, museums, terminology, lexicography,<br> printing), including work for the International Standards Organisation ISO as the<br> Secretary of ISO/TC 46/SC 3 which finally produced â€œISO 5127 Information and<br> Documentation â€“ Vocabulary (now 2016)â€œ and ISO/TC46/WG2 â€œCountry codesâ€<br> (Standard ISO 3166 Parts 1,2,3). In this context, the first relation to the cultural heritage<br> and museum field emerged in 1984/1987, particularly towards ICOM-CIDOC, and this<br> relation has been kept ever since.<br>During the afore-mentioned work, Axel developed a growing interest in a comprehensive<br> view of the information chain as a whole, researching into the interconnections within, as<br> well as the commonalities of, the information field with so interrelated fields like archives, libraries, documentation,<br> museums, lexicography / terminology, printing. As from 1999, he has been a staff member of the Institut fÃ¼r<br> Museumsforschung (IfM) of the State Museums of Berlin (SMB-PK), Germany, a central research and documentation<br> institute for museums in Germany.<br>Axel has been teaching sociology, documentation (information science) and aspects of museology at Applied<br> Universities in Berlin, Germany, since many years. 2004-2010, Axel is a member of the ICOM-CIDOC Board.</p>

                <h3 style="color: gray;">Mr. Vasco Fassina</h3>
                <img align="left" src="../keynotes/Fassina-photo.png">
                <p>He served the Italian Ministry of Cultural Heritage in the Venice Superintendence for 40<br> years as Senior researcher and Director of the Scientific Laboratory of Venice<br> Superintendence with the responsibility to co-ordinate and promote interdisciplinary<br> investigation projects aimed at conservation of historical building and wall paintings<br> materials. He was involved for 25 years in International Training Programme for<br> conservation of cultural heritage as teacher, coordinator and director of the biennial<br> International Stone Conservation Course of UNESCO-ICCROM held in Venice.<br>Teaching activities at International level as Visiting Professor: in the Sino-Italy cooperation Project â€œTraining in the<br> Restoration and Conservation of the Chinese Cultural Heritageâ€ in 2004 and 2007, in the International Course of<br> University School of Monument Conservation in Rhodos, Crete, Ravello, for the Faculty of Architecture in Rosario<br> (Argentina) and Salvador de Bahia (Brazil). In 2004 he was appointed Chairman of CEN/TC 346 The European<br> Committee for the standardization in the field of Conservation of Cultural Heritage. In 2012 he has been appointed<br> as Chairman of the national standardization commission for Cultural Heritage.<br>Actually is teaching chemistry applied to conservation and diagnostics techniques for investigation and<br> conservation at Italian Universities and Academy of Fine Arts in Milano, Brescia, Napoli, Verona. In 2007-2008 he<br> was appointed by the General Direction for Cooperation and Development of the Italian Foreign Affairs Ministry to<br> evaluate the feasibility study for the establishment of Longmen Stone Relics Conservation Center and of Dazu<br> Stone Monuments Conservation Center respectively located in the Middle and in the South West of China.</p>

                <h3 style="color: gray;">Prof. Dr. Antonia Moropoulou</h3>
                <img align="left" src="../keynotes/Moropoulou_final.jpg">
                <p>She is currently Professor at the National Technical University of Athens, Greece and<br> Vice President of the Technical Chamber of Greece. She is a Chemical Engineer, PhD,<br> Full Professor at the Section of Materials Science and Engineering of the School of<br> Chemical Engineering. She was elected as Contracted Professor in IUAV University of<br> Venice (1993), Visiting Professor at Princeton University (1995-1996) and has served as<br> Vice Rector of Academic Affairs of NTUA (2010-2014). She is a world class expert in<br> building materials and the preservation of monuments that comprise the Worldâ€™s Cultural<br> Heritage (Hagia Sophia in Istanbul, Medieval City of Rhodes, Holy Sepulchre in Jerusalem,<br> et als) scientific coordinator of more than 80 National, European and International research competitive programs<br> and author of 1 book, 2 monographies, 16 chapters in books and more than 450 scientific publications. In 2012 she<br> was awarded the â€˜YPATIAâ€™ Award by the â€˜Association of Hellenic Women Scientistsâ€™.<br>Presentation with title: <b>Study, implementation and monitoring: Scientific integrated governance for the rehabilitation<br> of the Holy Aedicule of the Holy Sepulchre in Jerusalem</b></p>

                <h3 style="color: gray;">Mr. Jean-Pierre MassuÃ© </h3>
                <img align="left" src="../keynotes/photo.png">
                <p><br><br><br><br><br><br><br><br><br><br><br>Presentation with title: <b>A Euro-Med initiative: Proposal to set up "Cultural Heritage Advisors<br> for Civil Protection in emergency situations and Military Authorities in case of conflicts situation"</b></p><br>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    <a target="_blank" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img src="../pic/f1-2.png" alt="fb logo"></a>
                    <a target="_blank" href="https://twitter.com/EuroMed2016"><img src="../pic/f2-2.png" alt="twitter logo"></a>
                    <p>World Cultural Heritage Conference 2016 - Euromed 2016 - International Conference on Cultural Heritage Documentation, Preservation and Protection.</p>
                    <p>All rights reserved.  © 2017</p>
                </footer>
            </div>
        </div>
</body>
</html>