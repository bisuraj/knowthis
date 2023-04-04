<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="css/blogcss.css" rel="stylesheet">


</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['user_id'])) {
        include 'navbarlogin.php';
    } else {
        include 'navbar.php';
    }

    ?>

    <main class="d-flex align-items-start justify-content-center mt-5 pt-5">

        <div class="w-50">

            <div class="d-flex align-items-center justify-content-center">
                <div class="tm-post-full">
                    <div class="mb-4">
                        <h2 class="pt-2 tm-color-primary tm-post-title">IMPROVING THE QUALITY OF EDUCATION IN RURAL INDIA
</h2>
                        <p class="tm-mb-40 text-muted h6">April 05 2023 posted by Bisuraj Sharma</p>

                        <p>The Indian demographic can be broadly divided into two categories, Rural and Urban. This divide is not on the basis of caste, religion or creed but the living standards of the community. Rural India is mostly dependent on agriculture while the urban population relies on technology and commerce for their livelihood. The disparity in the conditions of rural and urban India is a sore thumb in the otherwise fast-developing nation. What makes it worse is that the majority of the country&rsquo;s population lives in the villages. And yet, the majority of India&rsquo;s villages lack even the basic amenities. The biggest difference is in the field of education. According to the National Survey Scheme (NSS), 71st Round, 2014, the urban literacy rate is 79.5% while the rural is 69.1%. However, this is only a partial picture. The dropout rate of rural schools have been at a staggering high in higher education. The government has built a lot of Primary schools but when it comes to High schools, there is just not enough infrastructure or incentive for the students to carry on. Most students, especially girls, drop out of school at a very early age. The ones who continue often have to move to the cities for higher education. The kids of rural India might be literate, but very few actually continue their education long enough to make a difference.</p>

<p>There are many factors causing the drop outs. The first and the most pertinent is poverty. In most households, the children are expected to support their family from a very early age. Boys are sent out to earn while girls help in household chores. The time that they are supposed to dedicate to studies, is put into helping the family. The picture has changed a lot for boys but for girls, it is still the same. While the male literacy rate in rural areas is 72.3%, the female literacy rate is 56.8%. This leads us to another overarching reason: the lack of awareness among the rural population. Though most of them understand the importance of getting their children educated, formal schooling is too expensive an investment for them in terms of time and money. They don&rsquo;t realise the long-term advantages would outweigh the short-term gains. The lack of job opportunities in the rural areas also add to the apathy. They would rather teach their children agriculture which ensures meagre but definite income. There have been many government initiatives to improve the quality of education in the backward areas. From building of new schools to improving the teacher-student ratio, the government is trying to fill the gaps. One of the notable programs was the Non-formal education scheme. The NFE was an attempt to decentralise education and make it more accessible. The idea was to set up NFE centres at places where formal schooling was not successful. These centres were meant for school drop-outs and others who could not access formal schooling. The NFE centres would be run by authorised volunteer organisations and the curriculum and mode of teaching would be informal and learner-centred. Another initiative was the mid-day meal scheme. It provided a major incentive for kids to attend school. It not only helped in retaining students but also promoted nutrition and health in children. Then there are Operation Blackboard and Schemes for Infrastructure Development of Private Aided/Unaided Minority Institutes (IDMI) which encourage school staff to make better use of the amenities provided to them and also maintain a basic level of infrastructure like separate toilets for boys and girls, sanitary dispensers for girls, one classroom per class and a minimum of three teachers in primary schools.</p>

<p>However, there are some factors that lie beyond the control of the government. A lot of our villages are in remote areas. The schools are situated in central locations to attract a bigger strength. In such cases, safe transport becomes a major hurdle. Students often have to travel long distances on their own to reach school. This becomes even more difficult in the scorching summers or monsoons when roads are often flooded. Secondly, though the government has done its best to allocate teachers, these teachers are not always well-trained. Lack of proper guidance and fruitful teaching is often a discouraging factor. There have been numerous reports of teachers being away on long leaves and otherwise, neglecting their duty. Added to this is the case of discrimination based on caste, ability and gender- a major deterrant for children from backward communities. Then there is the issue of language. Most maths and science text books are in English and students have a hard time understanding them.</p>

<p>A panacea to all these problems could be the introduction of technology into rural classrooms. It can make learning fun and interactive and most importantly, more comprehensible. It can break down the language barrier with the use of videos to explain concepts. It can make learning a whole new experience, such that, students look forward to attending schools. However, this remains a distant dream with only 9% of villages in India having internet access. In fact, a lot of villages do not even have a stable supply of electricity. Thus, even offline LMS modules cannot be run on a regular basis. Another problem in deploying technology is teacher-readiness. Most teachers in rural areas come from similar backgrounds and lack the training to handle computers efficiently. As such, they are often not interested in using technology in classrooms.</p>

<p>The silver lining however, has come in the form of private NGOs and CSR initiatives, which, in association with government bodies are investing in bringing technology into the rural classrooms. From training the teachers to allocating trained resource persons, the intervention from the private sector has been a boon to rural India. These initiatives would gain strength if the government could collaborate with more corporates to direct their CSR and their expertise in technology towards education in the rural areas. This would also lend more legitimacy to these initiatives and attract the educated youth from urban spaces. If more and more of our youth get sensitized and devote even a part of their time and efforts towards the cause of education, the schools in Indian villages will soon be at par with their urban counterparts.</p>                       <span class="d-block text-right tm-color-primary">Agriculture</span>
                    </div> <!-- Comments -->
                    <div class="container">
                        <h2 class="text-primary pb-3">Comments</h2>
                        <hr>

                        <form action="" class="comment-form pt-3">
                            <h2 class="text-primary pb-3">Your comment</h2>
                            <div class="form-group">
                                <input class="form-control" name="name" type="text" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" type="text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class="text-right m-2 mb-4">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <aside class="d-flex w-25">
            <div class="tm-post-sidebar">
                <hr class="mb-3 tm-hr-primary">
                <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
                <ul class="tm-mb-75 pl-5 tm-category-list">
                    <li><a href="blog1.php" class="tm-color-primary">Agriculture</a></li>
                    <li><a href="blog2.php" class="tm-color-primary">Government Schemes</a></li>
                    <li><a href="blog3.php" class="tm-color-primary">Awareness</a></li>
                    <li><a href="blog4.php" class="tm-color-primary">Recent Technology</a></li>
                    <li><a href="#" class="tm-color-primary">Trends</a></li>
                </ul>
                <hr class="mb-3 tm-hr-primary">
                <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                <a href="blog1.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/onion.jpeg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 1
                        </figcaption>
                    </figure>
                </a>
                <a href="blog2.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/gvt.jpg" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 2
                        </figcaption>
                    </figure>
                </a>
                <a href="blog3.php" class="d-block tm-mb-40">
                    <figure>
                        <img src="images/edu.jfif" alt="Image" class="mb-3 img-fluid">
                        <figcaption class="tm-color-primary">Post 3</figcaption>
                    </figure>
                </a>
            </div>
        </aside>

    </main>
    <?php
    include 'footer.php';
    ?>
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>