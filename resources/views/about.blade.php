<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Internet Explorer Compatible meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- first mobile meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Comouters World</title>
    <link href="ex/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="ex/css/style.css" rel="stylesheet" type="text/css">
    <link href="ex/css/media.css" rel="stylesheet" type="text/css">
    <script src="ex/js/html5shiv.min.js"></script>
    <script src="ex/js/respond.min.js"></script>
    <script src="ex/js/jquery-2.2.4.js"></script>
    <script src="ex/js/bootstrap.min.js"></script>
    <script src="{{ asset('ex/js/data.js') }}"></script>
    {{-- <script src="ex/js/function.js"></script> --}}
</head>


<body onload="footer(),data()">
    <div class="header bg-c-black">
        <div class="floatright logodiv">
            <img src="ex/images/cw.png" width="130px">
            <img src="ex/images/name.png" width="185px">
        </div>
        <div class="floatright divsearch">
            <label class="labelsearch">أبحث في الموقع :</label>
            <input type="text" class="inputsearch" placeholder="أبحث هنا">
            <input type="button" class="search" value="إبحث">
        </div>
    </div>
    <div class="clear"></div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home"
                                aria-hidden="true"></span> الرئيسة</a></li>
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#">اتصل بنا</a></li>
                    <li><a href="#">تحتاج مساعدة ؟</a></li>
                    <li><a href="{{ route('login') }}">دخـول</a></li>
                </ul>
            </div><!--/.nav-collapse -->
            <button class="cart">سلة الشراء</button>
        </div>
        {{--




                --}}



    </nav>
    <div>
        <!-- Single button -->
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle dep" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                اقسام الموقع <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="laptop.html">اجهزة الكمبيوتر</a></li>
                <li><a href="computer.html">مستلزمات الكمبيوتر</a></li>
                <li><a href="printer.html">طابعات</a></li>
                <li><a href="camera.html">منظومات كايمرات مراقبة</a></li>
                <li><a href="modem.html">اجهزة شبكات</a></li>
                <!-- <li><a href="#">اجهزة سيرفرات</a></li> -->
                <li><a href="projecter.html">اجهزة عرض</a></li>
                <li><a href="games.html">اجهزة ألعاب</a></li>
                <li><a href="bags.html">حقائب لابتوبات ماركة</a></li>
            </ul>
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img data-src="holder.ex/js/1140x500/auto/#777:#555/text:First slide" alt="First slide [1140x500]"
                        src="ex/images/1.png" data-holder-rendered="true" width="100%">
                </div>
                <div class="item">
                    <img data-src="holder.ex/js/1140x500/auto/#666:#444/text:Second slide"
                        alt="Second slide [1140x500]" src="ex/images/2.png" data-holder-rendered="true"
                        width="100%">
                </div>
                <div class="item">
                    <img data-src="holder.ex/js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide [1140x500]"
                        src="ex/images/3.png" data-holder-rendered="true" width="100%">
                </div>
                <div class="item">
                    <img data-src="holder.ex/js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide [1140x500]"
                        src="ex/images/4.png" data-holder-rendered="true" width="100%">
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="clear"></div>

    <div class="divlast" style="line-height: 1.8">
        <h2>آخر العروض في جميع الاقسام</h2>
        <div id="lap">
            <p style="margin: 2%;
            font-size: 20px;">
                <span style="color:red;">CompUter World</span> هو متجر بيع بالتجزئة عبر الإنترنت مخصص لتوفير مجموعة شاملة من أجهزة الكمبيوتر والأجهزة الطرفية والملحقات. مع التركيز على الجودة والقدرة على تحمل التكاليف ورضا العملاء، تهدف <span style="color:red;">CompUter World</span> إلى تلبية احتياجات المستخدمين العاديين وعشاق التكنولوجيا على حدٍ سواء. بدءًا من أجهزة الألعاب عالية الأداء وحتى محطات العمل الجاهزة للمكاتب، تقدم <span style="color:red;">CompUter World</span> مجموعة متنوعة من المنتجات لتلبية احتياجات كل عميل.
                <br>

                فئات المنتجات:...
                <br>


                أجهزة الكمبيوتر ومكوناتها: <br>

                أجهزة الكمبيوتر المكتبية: أنظمة مسبقة الصنع لأغراض مختلفة مثل الألعاب وإنشاء المحتوى والاستخدام المكتبي.
                أجهزة الكمبيوتر المحمولة: حلول حوسبة محمولة تتراوح من أجهزة Ultrabook خفيفة الوزن إلى أجهزة الكمبيوتر المحمولة القوية المخصصة للألعاب.
                <br>
                المكونات: مكونات الأجهزة الفردية بما في ذلك وحدات المعالجة المركزية ووحدات معالجة الرسومات وذاكرة الوصول العشوائي واللوحات الأم ومحركات التخزين وإمدادات الطاقة. <br>
                الطابعات:

                الطابعات النافثة للحبر: طابعات متعددة الاستخدامات مناسبة للاستخدام المنزلي والمكتبي، وتوفر طباعة عالية الجودة بالألوان وبالأبيض والأسود.
                طابعات الليزر: طابعات سريعة وفعالة مثالية لاحتياجات الطباعة بكميات كبيرة في الشركات والمؤسسات. <br>
                طابعات الكل في واحد: طابعات متعددة الوظائف تجمع بين إمكانات الطباعة والمسح الضوئي والنسخ وإرسال الفاكس. <br>
                أجهزة الألعاب:

                أجهزة الكمبيوتر المخصصة للألعاب: أجهزة ألعاب قابلة للتخصيص مُحسّنة لتحقيق أداء سلس وتجارب ألعاب غامرة. <br>
                وحدات تحكم الألعاب: أحدث وحدات تحكم الألعاب من العلامات التجارية الرائدة، مما يتيح الوصول إلى مكتبة واسعة من الألعاب والمحتوى الترفيهي. <br>
                ملحقات الألعاب: وحدات التحكم، وسماعات الرأس، ولوحات المفاتيح، والفئران، وغيرها من الأجهزة الطرفية المصممة خصيصًا لعشاق الألعاب. <br>
                أجهزة الشبكات والعرض:

                أجهزة التوجيه وأجهزة المودم: أجهزة توجيه وأجهزة مودم عالية السرعة لضمان اتصال سلس بالإنترنت وأداء الشبكة. <br>
                محولات الشبكة: محولات قابلة للتوسيع لإنشاء شبكات سلكية فعالة في المنازل والشركات.
                الشاشات: مجموعة واسعة من الشاشات تتراوح من شاشات العرض القياسية عالية الدقة إلى الشاشات المنحنية فائقة الاتساع، والتي تلبي مختلف التفضيلات والميزانيات. <br>
                دلائل الميزات: ..... <br>

                تنوع المنتجات: تقدم <span style="color:red;">CompUter World</span> مجموعة واسعة من المنتجات من العلامات التجارية الرائدة في الصناعة، مما يضمن حصول العملاء على أحدث التقنيات والابتكارات. <br>

                أسعار تنافسية: من خلال استراتيجيات التسعير التنافسية والخصومات والعروض الترويجية من حين لآخر، تسعى <span style="color:red;">CompUter World</span> جاهدة لتوفير القيمة مقابل المال لعملائها. <br>

                دعم العملاء: تعطي <span style="color:red;">CompUter World</span> الأولوية لرضا العملاء وتوفر دعمًا سريع الاستجابة للعملاء لمعالجة أي استفسارات أو مشكلات أو مساعدة فنية يطلبها العملاء.
                <br>

                المعاملات الآمنة: يضمن المتجر عبر الإنترنت المعاملات الآمنة من خلال بوابات الدفع المشفرة، وحماية معلومات العملاء والتفاصيل المالية.
                <br>

                مراجعات المنتج وتوصياته: يمكن للعملاء الاستفادة من مراجعات المنتج وتقييماته وتوصياته لاتخاذ قرارات شراء مستنيرة بناءً على تجارب المستخدمين الآخرين.
                <br>

                الشحن والتسليم السريع: تقدم <span style="color:red;">CompUter World</span> خدمات شحن وتسليم فعالة، مما يضمن وصول المنتجات في الوقت المناسب إلى عتبة العملاء. <br>

                خدمات الدعم الفني والتثبيت: بالإضافة إلى المبيعات، توفر <span style="color:red;">CompUter World</span> خدمات الدعم الفني والمساعدة في التثبيت لمساعدة العملاء على إعداد منتجاتهم المشتراة وتحسينها. <br>

                خاتمة:
                تعد <span style="color:red;">CompUter World</span> وجهة شاملة لجميع الاحتياجات المتعلقة بالكمبيوتر، حيث تقدم مجموعة متنوعة من المنتجات وأسعار تنافسية ودعمًا ممتازًا للعملاء. سواء كنت مستخدمًا عاديًا يحتاج إلى كمبيوتر محمول أساسي أو لاعبًا متمرسًا يبحث عن أحدث أجهزة الألعاب، فإن <span style="color:red;">CompUter World</span> توفر لك كل ما تحتاجه.
                     </p>
   </div>
    </div>
    <div class="clear"></div>
    <br>



    <div id="footer">
        <div id="sub-footer-1">
            <h2>للتواصل</h2>
            <hr>
            <div id="conect" class="cwhite"></div>
        </div>
        <div id="sub-footer-2">
            <h2>خدمة العملاء</h2>
            <hr>
            <a href="#">عنـــا</a>
            <a href="#">طرق الدفع</a>
            <a href="#">الشحن والتوصيل</a>
        </div>

        <div id="sub-footer-3">
            <h2>اسعار الصرف</h2>
            <hr>
            <div id="exchange" class="cwhite">

            </div>
        </div>
    </div>
    <div class="footerc"><span>جميع الحقوق محفوظة لفريق Genuis Programmer 2020</span></div>

</body>

</html>
