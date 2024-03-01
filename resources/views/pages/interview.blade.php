@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">

            <link rel="stylesheet" media="all" href="./css/interview.css"/>
            <script type="text/javascript" src="./js/interview.js"></script>

            <div id="interview">

                <div class="main-banner">
                    <div class="inner">
                        <h1 class="headingMain"><span>社員インタビュー</span></h1>
                    </div>
                </div>

                <div class="interview-tab">
                    <div class="inner">
                        <ul class="interviewList-tab">
                            <li class="interviewItem-tab js-fadein">
                                <a class="scroll" href="#interview-01">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image01_sp.png 2x')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image01_pc.png 2x')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image01_pc.png')}}" alt="上下肢障がいの女性従業員">
                                    </picture>
                                    <div class="interviewTitle">
                                        <span class="t1">人事部</span>
                                        <span class="t2">上下肢障がい</span>
                                    </div>
                                </a>
                            </li>
                            <li class="interviewItem-tab js-fadein">
                                <a class="scroll" href="#interview-02">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image02_sp.png 2x')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image02_pc.png 2x')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image02_pc.png')}}" alt="聴覚障がいの女性従業員">
                                    </picture>
                                    <div class="interviewTitle">
                                        <span class="t1">営業推進本部</span>
                                        <span class="t2">聴覚障がい</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="interview-01" class="interviewContent">
                    <div class="inner">
                        <div class="interview-banner js-fadein">
                            <div class="bannerInfo">
                                <div class="infoInner">
                                    <h2 class="ttl">不安や疑問を伝えれば<br/>どうしたら働きやすくなるかを<br/>一緒に考えてくれます</h2>
                                    <p class="text">2022年入社　人事部<br/>上下肢障がい</p>
                                </div>
                            </div>
                            <div class="imageContent">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image03_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image03_pc.png')}}">
                                    <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image03_pc.png')}}" alt="上下肢障がいの女性従業員">
                                </picture>
                            </div>
                        </div>
                        <div class="interviewList-qa">
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>大成建設への志望動機と<br class="sp-br"/>入社理由を教えてください。</span></h2>
                                <div class="qaInfo">
                                    <div class="textInfo">
                                        <p class="text js-fadein">私は就職活動を進める中で、重視していたポイントが2つありました。1つ目が防災や減災などの自然災害の復旧に関わっている企業であること。2つ目が自分の中でこれだけは譲れないと思っていた企業選びの条件にすべて当てはまっていることです。</p>
                                        <p class="text js-fadein">1つ目の理由は、私の障害に全く関係なく、大学の授業を受けていたときに「これからの日本は自然災害が多発し、防災ではなく減災という考えが重要になる」と教わって、その言葉が心に残ったので復旧作業に携わっている企業に行きたいと思いました。</p>
                                        <p class="text js-fadein">2つ目の理由は、私の障害に関係しているのですが、車いすを置ける場所を確保できる環境であることや、電車での通勤が不安なくできる場所に会社があるかなどを、企業選びをする上で重視していました。この譲れない条件は、面接の質問のときに会社に伝えていたので面接後に社内を見学できたり、選考が進む中で不安が解消されたので良かったと思っています。</p>
                                        <p class="text js-fadein">あとは、面接など社員の方とお話しする際に、過度に緊張せず私の考えを自分らしい言葉で伝えられたので、大成建設に入社したいなと思いました。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>所属部署における仕事内容と役割は？</span></h2>
                                <div class="qaInfo">
                                    <div class="textInfo">
                                        <p class="text js-fadein">現在配属しているチームの仕事は、人事部の中でも障がい者採用だったり、出産・育児に関する支援などのいわゆるD&I（ダイバーシティー&インクルージョン）に関する仕事をしています。</p>
                                        <p class="text js-fadein">私は1年目のとき、チーム内の経理業務を担当していました。<br/>
                                            開催した研修の請求書が他社から送られてきたらシステムに入力して、きちんと代金が振り込まれるよう経理室に提出したり、チームの先輩方がシステムに入力した情報に間違いがないか確認を行っていました。<br/>
                                            ほかにも研修を行う際の名簿をエクセルで作成したり、研修実施後のアンケートの集計を行っていました。</p>
                                        <picture class="image js-fadein">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image04_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image04_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image04_pc.png')}}" alt="上下肢障がいの女性従業員はパソコンを使って仕事をしている">
                                        </picture>
                                        <p class="text js-fadein">2年目の現在は、パワーポイントで研修資料を作成したり、会場の用意の段取りなどを行っています。</p>
                                        <p class="text js-fadein">また、月初に育休のデータを集計して、各支店の担当者の方に連絡を送っています。お子様の生まれた社員の方から社内制度について質問が来た際は、育休についての説明をすることもあります。</p>
                                        <p class="text js-fadein">また、電話対応も行っています。その時は、メモが取りやすいように電話機からパソコンに転送させて電話を取っています。片手が不自由でも電話対応ができるので嬉しいです。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>どんなサポートを受けていますか？</span></h2>
                                <div class="qaInfo img-text01">
                                    <div class="imageItem js-fadein">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image05_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image05_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image05_pc.png')}}" alt="上下肢障がいの女性従業員は仕事をしている">
                                        </picture>
                                    </div>
                                    <div class="textInfo">
                                        <p class="text js-fadein">電動車いすで通勤しているので、オフィスの入り口のドアを1つ、スライド式に変更していただきました。<br/>
                                            入社前に会社見学をさせてもらいましたが、その際に私が車いすでドアの開閉に苦労している様子をみて、会社側からスライドドアへの変更を打診してくださいました。スライドドアだと自分で開閉できるため助かっています。</p>
                                        <p class="text js-fadein">また、室内は車いすから降りて歩きたいという希望があったため、車いすを置いておく場所を確保していただいています。<br/>
                                            他にも、部署内で席替えがある時にも、必ずこの席で移動に問題がないか確認を一緒にしてくださいます。 電話対応も左手に障がいがある分、メモが取りやすいようパソコンで電話が取れるように設定をしました。<br/>
                                            必要な配慮を受けている分、仕事内容は他の人と変わらない内容を行っています。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>就職活動中のみなさんへ<br class="sp-br"/>メッセージを！</span></h2>
                                <div class="qaInfo img-text02">
                                    <div class="textInfo">
                                        <p class="text js-fadein">就職活動を進めるうえで、この会社で私にできることがあるかな…という不安や、障がいへの配慮がちゃんとあるのかな？などの疑問があるかと思います。<br class="sp-br"/><br class="sp-br"/>実際私が就活していた時もとても不安でした。<br class="pc-br"/>
                                            ですが、その不安や疑問をぜひ大成建設の社員に伝えてください。どうすればいちばん働きやすいのか一緒に解決策を考えてくれます。<br/><br class="sp-br"/>
                                            あとは、就職活動中は様々な会社の話や選考を受けてください。<br/>
                                            きっとここまでの配慮は私には必要ない、ということや自分のやってみたいことが見えてきて、自分の考えの軸がはっきりすると思います。</p>
                                        <p class="text sp-br js-fadein">私が学生のときに受けている会社は少なかったですが、それでも大成建設を自分から選んで入社すると決めたので、納得感を持って就職活動を終わらせることができました。<br/><br class="sp-br"/>
                                            就職活動を頑張っている皆さんにも、色々な企業と比較したうえで納得感をもって大成建設に入社してもらいたいです。本社や支店など皆さんが活躍できる場所はたくさんあるので、是非お待ちしています。</p>
                                    </div>
                                    <div class="imageItem js-fadein">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image06_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image06_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image06_pc.png')}}" alt="笑顔で上下肢障がいの女性従業員は仕事をしている">
                                        </picture>
                                    </div>
                                </div>
                                <div class="qaInfo pc-br">
                                    <div class="textInfo">
                                        <p class="text js-fadein">私が学生のときに受けている会社は少なかったですが、それでも大成建設を自分から選んで入社すると決めたので、納得感を持って就職活動を終わらせることができました。<br/>
                                            就職活動を頑張っている皆さんにも、色々な企業と比較したうえで納得感をもって大成建設に入社してもらいたいです。本社や支店など皆さんが活躍できる場所はたくさんあるので、是非お待ちしています。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-boss">
                            <div class="messageBox js-fadein">
                                <div class="messageInfo">
                                    <h2 class="title">上司からのメッセージ</h2>
                                    <p class="text">現在は、部門のWebサイトの修正、育休取得促進に関する業務、フレックス勤務者の集計を始め、様々な業務にチャレンジしています。<br/>
                                        2年目の社員とは思えないほど頼もしく感じています。<br/><br class="sp-br"/>
                                        また、業務を行う環境面で困ったことが起きても、自身で対応できるときには責任をもって対応し、それが難しいと判断した時には、きちんと周囲の人に助けを求めることができるなど、高いコミュニケーション能力のおかげで、部署としても大変助かっています。</p>
                                </div>
                                <div class="messageImage">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image07_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image07_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image07_pc.png')}}" alt="PCを使って仕事をしている男性　イラスト">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="oneDay">
                            <h2 class="title js-fadein">1日の仕事</h2>
                            <div class="oneDay-content">
                                <ul class="oneDay-list js-fadein">
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon01_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon01_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>08:30</span>出社</p>
                                            <p class="text">メールや社内からの連絡の確認。<br/>始業時間は8:45ですが少し余裕をもって出社しています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon02_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon02_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>09:00</span>業務スタート</p>
                                            <p class="text">昨日の仕事の続きやデータ集計や資料作成を行います。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon03_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon03_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>12:00</span>お昼休憩</p>
                                            <p class="text">先輩方と話したり、自席でお弁当を食べたりしています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon04_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon04_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>13:00</span>会議室で打ち合わせ</p>
                                            <p class="text">先輩方と打合せをしたり、社外の人と打合せすることもあります。</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="oneDay-list js-fadein">
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon05_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon05_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>15:00</span>業務</p>
                                            <p class="text">午前中に行っていたデータ集計の続きをします。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon07_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon07_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>16:45</span>業務</p>
                                            <p class="text">先輩方や室長からの仕事の依頼が<br class="sp-br"/>あったら、<br class="pc-br"/>その都度着手します。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon08_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon08_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>17:30</span>退勤</p>
                                            <p class="text">出来なかった仕事は次の日に続きができるよう、整理してから退勤します。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image08_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image08_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image08_pc.png')}}" alt="">
                                        </picture>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="interview-02" class="interviewContent">
                    <div class="inner">
                        <div class="interview-banner js-fadein">
                            <div class="bannerInfo">
                                <div class="infoInner">
                                    <h2 class="ttl">過度ではない配慮のお陰で<br/>障がいの壁を感じず<br/>仕事ができる環境です</h2>
                                    <p class="text">2022年入社　営業推進本部<br/>聴覚障がい</p>
                                </div>
                            </div>
                            <div class="imageContent">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image09_sp.png')}}">
                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image09_pc.png')}}">
                                    <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image09_pc.png')}}" alt="聴覚障がいの女性従業員">
                                </picture>
                            </div>
                        </div>
                        <div class="interviewList-qa">
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>大成建設への志望動機と<br class="sp-br"/>入社理由を教えてください。</span></h2>
                                <div class="qaInfo">
                                    <div class="textInfo">
                                        <p class="text js-fadein">将来は地域社会や生活に必要なモノに携わる企業で働きたいという思いがあり、大学はまちづくり専攻のゼミに在籍していました。<br/>
                                            在学中に一度、建設業界とは全く別ジャンルの企業で業務委託として働きましたが、生活に必要なモノとは何なのかと色々模索していく中で建設業界に興味持ち始めました。
                                        </p>
                                        <p class="text js-fadein">沢山の建設会社のWebサイトを見た中からいちばん惹かれたのが大成建設で、「地図に残る仕事。」というキャッチコピーが脳裏に焼き付けられました。<br/>
                                            自分が挑戦したい企業はここだと確信し、内定をいただけたら絶対入社しようと決めていました。
                                        </p>
                                        <p class="text js-fadein">志望動機は、大成建設公式サイトに掲載している理念体系、<br/>
                                            「人がいきいきとする環境を創造する」<br/>
                                            「次世代のための夢と希望に溢れた地球社会づくりに貢献」<br/>
                                            というグループ理念に加え、将来携わりたかった地域社会への貢献の想いがあり、ぜひ大成建設で働きたいと強く志望しました。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>所属部署における<br class="sp-br"/>仕事内容と役割は？</span></h2>
                                <div class="qaInfo">
                                    <div class="textInfo">
                                        <p class="text js-fadein">所属部署は営業推進本部企画推進部プロモーション室です。<br/>
                                            営業広報活動、グループ連携営業戦略の推進や展示会の企画・実施等を行っている部署で、役割は営業支援といった位置付けです。<br/>
                                            私は主に営業広報活動の「Technology&Solution」のサイト運営の仕事をしています。</p>
                                        <picture class="image js-fadein">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image10_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image10_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image10_pc.png')}}" alt="聴覚障がいの女性従業員は仕事をしている">
                                        </picture>
                                        <p class="text js-fadein">内容は、Technology&Solutionサイトの運用、ニュース・記事作成、パンフレット更新等です。<br/>
                                            入社した頃誰しもが一度は通る道でしょうが、新しい環境に慣れなかったときは苦労しました。</p>
                                        <p class="text js-fadein">あれから1年経ち、1人でニュースや記事をイチから作成しサイトに公開するまでに成長できたと思います。<br/>
                                            知識を蓄えることで、理解してるからこそ作れるモノが増え、とても楽しくお仕事をしています。</p>
                                        <p class="text js-fadein">自分が作成したニュースや記事へ実際に世界中からアクセスがあり、色々な方が見て下さっているということを感じられ、とてもやりがいのある仕事です。展示会出展の際は、記事作成にあたっての写真撮影や、展示会のお手伝いすることもあり、様々な業務や豊かな知識に触れる機会が多い部署です。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>どんなサポートを受けていますか？</span></h2>
                                <div class="qaInfo img-text01">
                                    <div class="imageItem js-fadein">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image11_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image11_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image11_pc.png')}}" alt="聴覚障がいの女性従業員は仕事をしている">
                                        </picture>
                                    </div>
                                    <div class="textInfo">
                                        <p class="text js-fadein">会社からはiPad・ブギーボードを提供しても<br class="sp-br"/>らっています。<br/>
                                            また、会社が音声文字化ツールの「UDトーク」を法人向けプランで導入しており、いつでも誰でも使えるようになっています。<br/>
                                            会議ではiPadを持参し、UDトークアプリを活用し、会話の内容を理解しています。<br/><br class="sp-br"/>
                                            ブギーボードは同僚の社員に1つずつに配付されており、業務会話や質問の際に活用しています。<br/>
                                            オンラインでの会議では、Teamsで文字起こしを使用したりチャットでやり取りしてコミュニケーションを取っています。</p>
                                        <p class="text js-fadein">入社の際から人事部の担当者には、過度な配慮ではなく合理的な配慮で支援していただいてます。<br/>
                                            おかげさまで、とても仕事しやすく障がいの壁を感じさせない環境となっております。<br class="sp-br"/>とても恵まれている企業だと実感しています。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="interviewItem-qa">
                                <h2 class="title js-fadein"><span>就職活動中のみなさんへ<br class="sp-br"/>メッセージを！</span></h2>
                                <div class="qaInfo img-text02">
                                    <div class="textInfo">
                                        <p class="text js-fadein">就職活動はあなたの魅力や実力を企業に見てもらえるチャンスだと、私はそう思っています。<br/>
                                            自分の気持ちや想いを大切にして素直に突き進んでください！</p>
                                        <p class="text js-fadein">大成建設で働きたい気持ち、叶えたい想い、そしてあなたの夢をぜひ当社へ大きく語ってください。<br/>
                                            「地図に残る仕事。」<br class="pc-br"/>という誇りを持って一緒に働ける日を心待ちしております。</p>
                                    </div>
                                    <div class="imageItem js-fadein">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image12_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image12_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image12_pc.png')}}" alt="笑顔で聴覚障がいの女性従業員">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="message-boss">
                            <div class="messageBox js-fadein">
                                <div class="messageInfo">
                                    <h2 class="title">上司からのメッセージ</h2>
                                    <p class="text">現在担当してもらっている業務は、主にテクノロジー＆ソリューションサイトの記事制作やメールマガジンの発行を行うことです。<br/>
                                        日々のコミュニケーションはTeamsや携帯の文字起こし機能を使用してのやり取りになりますが、打合せなどでは積極的に自身の意見を述べてくれます。<br/><br class="sp-br"/>
                                        サイトデザイン等、打合せでの表現が細かくなる作業も少なくない中、しっかりと理解するまで説明を受けるなど、責任感を持って業務にあたってくれていることを実感します。</p>
                                </div>
                                <div class="messageImage">
                                    <picture class="image">
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image13_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image13_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image13_pc.png')}}" alt="PCを使って仕事をしている男性　イラスト">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="oneDay">
                            <h2 class="title js-fadein">1日の仕事</h2>
                            <div class="oneDay-content">
                                <ul class="oneDay-list js-fadein">
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon01_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon01_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>08:30</span>出社</p>
                                            <p class="text">余裕をもって業務開始の10～15分前に出社。<br/>机の回りを綺麗して、お茶を用意し、業務モチベーションをあげるようにしています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon09_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon09_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>09:30</span>ミーティング</p>
                                            <p class="text">チームメンバーたちと今日のタスクを確認し、新たな業務や分担などを話し合い、確認して各自業務入ります。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon03_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon03_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>12:00</span>お昼休憩</p>
                                            <p class="text">美味しいお店を探して、いつも先輩や同期と楽しくお話しながらランチしています。<br/>
                                                時間がある時は、本屋に行ってリフレッシュしています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon04_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon04_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>13:00</span>午後の業務スタート</p>
                                            <p class="text">パンフレットの更新、資料作成など定常業務をしたりしています。</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="oneDay-list js-fadein">
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon05_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon05_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>15:00</span>打ち合わせ</p>
                                            <p class="text">社内の他部署と打ち合わせをし、Webサイトの各ページ展開など進行しています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon06_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon06_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>16:00</span>業務</p>
                                            <p class="text">WEBプログラミング言語のHTMLを用いて、<br class="pc-br"/>Webサイトに掲載する記事やニュースの作成や、実装したものを確認・掲載する作業をしています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="iconTime">
                                            <source srcset="{{asset('images/contentBox/interview/interview_oneday01_icon08_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_oneday01_icon08_pc.png')}}" alt="">
                                        </picture>
                                        <div class="oneDay-box">
                                            <p class="title-time"><span>17:30</span>退勤</p>
                                            <p class="text">時々残業することもありますが、基本的に定時に仕事を終わらせて、充実したプライベート時間をたっぷり過ごしています。</p>
                                        </div>
                                    </li>
                                    <li class="oneDay-item">
                                        <picture class="image">
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/interview/interview_image14_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/interview/interview_image14_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/interview/interview_image14_pc.png')}}" alt="">
                                        </picture>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
