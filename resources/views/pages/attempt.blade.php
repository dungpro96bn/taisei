@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">

            <link rel="stylesheet" media="all" href="./css/attempt.css"/>
            <script type="text/javascript" src="./js/attempt.js"></script>

            <div id="attempt">

                <div class="main-banner">
                    <div class="inner">
                        <h1 class="headingMain"><span>大成建設の取り組み</span></h1>
                    </div>
                </div>

                <div class="attempt-tab">
                    <div class="inner">
                        <ul class="attemptList-tab">
                            <li class="attemptItem-tab js-fadein">
                                <a class="scroll" href="#attempt-01">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image01_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image01_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_tab_image01_pc.png')}}" alt="手話で会話する">
                                    </picture>
                                    <div class="attemptTitle">
                                        <p class="ttl">聴覚障がい</p>
                                    </div>
                                </a>
                            </li>
                            <li class="attemptItem-tab js-fadein">
                                <a class="scroll" href="#attempt-02">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image02_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image02_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_tab_image02_pc.png')}}" alt="上下肢障碍者の車いす">
                                    </picture>
                                    <div class="attemptTitle">
                                        <p class="ttl">上下肢障がい<br/>車いす利用者</p>
                                    </div>
                                </a>
                            </li>
                            <li class="attemptItem-tab js-fadein">
                                <a class="scroll" href="#attempt-03">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image03_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image03_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_tab_image03_pc.png')}}" alt="精神・発達障がい社員の卓パーテーション">
                                    </picture>
                                    <div class="attemptTitle">
                                        <p class="ttl">精神・発達<br class="sp-br"/>障がい</p>
                                    </div>
                                </a>
                            </li>
                            <li class="attemptItem-tab js-fadein">
                                <a class="scroll" href="#attempt-04">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image04_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_tab_image04_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_tab_image04_pc.png')}}" alt="外部専門家と相談">
                                    </picture>
                                    <div class="attemptTitle">
                                        <p class="ttl">その他</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="attempt-01" class="attemptContent">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>聴覚障害</span></h2>
                        <div class="attemptContent-box js-fadein">
                            <div class="content">
                                <ul class="list-textCheck">
                                    <li class="item-textCheck js-fadein"><p>対話をする時は口の動きが読めるように、<span>口を見せてはっきりと話す</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>日常業務で<span>音声文字化ツール利用</span>の全社周知と啓発</p></li>
                                    <li class="item-textCheck js-fadein"><p>Microsoft<span> Teamsのチャット</span>での<br class="sp-br"/>コミュニケーション</p></li>
                                    <li class="item-textCheck js-fadein"><p><span>電話応対免除</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>ブギーボードなどで<span>筆談</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>本社内の館内放送と同じ内容を<br class="sp-br"/><span>メール配信</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>入社式や内定式、災害訓練の防災セミナーなどで<span>音声文字化ツールや手話通訳による情報保障</span></p></li>
                                </ul>
                                <ul class="imageList">
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image01_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image01_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image01_pc.png')}}" alt="UDトーク、PEKOEなどの音声文字化ツール">
                                        </picture>
                                        <p class="ttl">UDトーク、PEKOEなどの<br/>音声文字化ツール</p>
                                    </li>
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image02_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image02_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image02_pc.png')}}" alt="ブキーボード">
                                        </picture>
                                        <p class="ttl">ブギーボード</p>
                                    </li>
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image03_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image03_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image03_pc.png')}}" alt="手話通訳士">
                                        </picture>
                                        <p class="ttl">手話通訳士による<br/>情報保障</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="message-boss js-fadein">
                            <div class="messageBox">
                                <div class="messageInfo js-fadein">
                                    <h2 class="title">社員からのメッセージ</h2>
                                    <p class="text">聴覚障がいと一口に言っても、人によって得意・不得意が様々です。<br/>
                                        採用面接の際に、その点についても丁寧に質問してもらい、働くに際して不安<br class="sp-br"/>だったことや不得意だと考えていることなどについて説明することができました。<br/>
                                        複数の音声文字化ツールを会社で法人契約してくれているので、場面によって<br class="sp-br"/>ツールを使い分けることが可能です。</p>
                                </div>
                                <div class="messageImage js-fadein">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image04_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image04_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image04_pc.png')}}" alt="オンライン打ち合わせ　イラスト">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="attempt-02" class="attemptContent">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>上下肢障がい・車いす利用者</span></h2>
                        <div class="attemptContent-box">
                            <div class="content">
                                <ul class="list-textCheck">
                                    <li class="item-textCheck js-fadein"><p><span>ユニバーサルトイレ</span>の導入</p></li>
                                    <li class="item-textCheck js-fadein"><p>車いすの高さに合わせて<br class="sp-br"/><span>上げ下げできるデスク</span>の導入</p></li>
                                    <li class="item-textCheck js-fadein"><p>重量物の<span>運搬業務を避ける</span>よう配慮</p></li>
                                </ul>
                                <ul class="imageList">
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image05_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image05_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image05_pc.png')}}" alt="ユニバーサルトイレ">
                                        </picture>
                                        <p class="ttl">ユニバーサルトイレ</p>
                                    </li>
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image06_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image06_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image06_pc.png')}}" alt="高さ調整できる机">
                                        </picture>
                                        <p class="ttl">高さを上下に調整可能な<br/>デスク</p>
                                    </li>
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image07_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image07_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image07_pc.png')}}" alt="上下肢障碍者の車いす車">
                                        </picture>
                                        <p class="ttl">就労中の車椅子の使用は<br/>本人の判断に委ねます</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="message-boss js-fadein">
                            <div class="messageBox">
                                <div class="messageInfo js-fadein">
                                    <h2 class="title">社員からのメッセージ</h2>
                                    <p class="text">採用面接の時に、「執務中に車椅子を利用するか、椅子に移るか、それはご自身が働きやすいほうで構いませんよ」と言ってもらったことが印象的です。<br/>
                                        入社してからまだ数年ですが、様々な業務にトライさせてもらっており、「自分はこういうことも得意なんだ！」ということに気付くことができました。<br/>
                                        これから、もっと多くの種類の業務を経験していきたいと考えています。</p>
                                </div>
                                <div class="messageImage js-fadein">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image04_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image04_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image04_pc.png')}}" alt="オンライン打ち合わせ　イラスト">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="attempt-03" class="attemptContent">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>精神・発達障がい</span></h2>
                        <div class="attemptContent-box">
                            <div class="content">
                                <ul class="list-textCheck">
                                    <li class="item-textCheck js-fadein"><p>周囲の視線が気になる社員のために<br class="sp-br"/><span>パーテーションを設置</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>後ろを通られるのが苦手という社員もいるので、<span>座席の位置を面接の際に確認</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>外部からの刺激（音・光など）に<br class="sp-br"/>過敏に反応してしまう場合、<br/>耳栓やサングラスなどの<span>保護具を使用可</span></p></li>
                                </ul>
                                <ul class="imageList">
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image08_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image08_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image08_pc.png')}}" alt="精神・発達障がい社員の卓パーテーション">
                                        </picture>
                                        <p class="ttl">卓上パーテーション</p>
                                    </li>
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image09_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image09_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image09_pc.png')}}" alt="音に過敏に反応してしまう場合、耳栓を使用可">
                                        </picture>
                                        <p class="ttl">耳栓</p>
                                    </li>
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image10_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image10_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image10_pc.png')}}" alt="光に過敏に反応してしまう場合、サングラスを使用可">
                                        </picture>
                                        <p class="ttl">サングラス</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="message-boss ">
                            <div class="messageBox">
                                <div class="messageInfo js-fadein">
                                    <h2 class="title">社員からのメッセージ</h2>
                                    <p class="text">業務の指示を聞きながらメモをとることが苦手なため、指示内容を録音することを許可してもらっています。<br/>
                                        また、指示の多くをTeamsのチャットでもらうようにしており、後から自分で見直すことができるので、安心して業務を進めることができています。<br/>
                                        体調の波もありますが、業務の締切などを柔軟に考えてもらえるなど、上司に相談しやすい雰囲気を作ってもらっています。</p>
                                </div>
                                <div class="messageImage js-fadein">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image04_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image04_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image04_pc.png')}}" alt="オンライン打ち合わせ　イラスト">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="attempt-04" class="attemptContent">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>その他</span></h2>
                        <div class="attemptContent-box">
                            <div class="content item-flex">
                                <ul class="imageList">
                                    <li class="imageItem js-fadein">
                                        <picture>
                                            <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image11_sp.png')}}">
                                            <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image11_pc.png')}}">
                                            <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image11_pc.png')}}" alt="外部専門家と相談">
                                        </picture>
                                        <p class="ttl">外部専門家との連携</p>
                                    </li>
                                </ul>
                                <ul class="list-textCheck">
                                    <li class="item-textCheck js-fadein"><p>本社・各支店に<br class="sp-br"/><span>障がい者職業生活指導員</span>を配置<br/>（産業医・健康管理室と密に連携してサポート）</p></li>
                                    <li class="item-textCheck js-fadein"><p>臨床心理士と産業カウンセラー・ジョブコーチの有資格者が、<span>本社及び全国の各支店の困りごとに対応</span></p></li>
                                    <li class="item-textCheck js-fadein"><p>障がいのある社員や上司と、<br class="sp-br"/><span>個々に面接してフォロー</span>を行います</p></li>
                                </ul>
                            </div>
                        </div>
                        <div class="message-boss js-fadein">
                            <div class="messageBox">
                                <div class="messageInfo js-fadein">
                                    <h2 class="title">臨床心理士の先生からの<br class="sp-br"/>メッセージ</h2>
                                    <p class="text">2016年から障がいのある社員の方の定着支援をお手伝いしています。<br/>一般的に、聴覚障がいのある方や精神・発達障がいのある方は働きづらさを感じることが多いと言われていますので、人事部の担当者と共に面談を通じて、当事者からは会社に言いにくい悩みをお聞きし、上司の方からは本人への指導方法などについてお話を伺い、少しでも働きやすい環境を整えられるよう対応しています。</p>
                                    <p class="text-note">キューブ・インテグレーション株式会社 <br class="sp-br"/>諏訪裕子先生</p>
                                </div>
                                <div class="messageImage js-fadein">
                                    <picture>
                                        <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/attempt/attempt_image12_sp.png')}}">
                                        <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/attempt/attempt_image12_pc.png')}}">
                                        <img class="mvPicture" src="{{asset('images/contentBox/attempt/attempt_image12_pc.png')}}" alt="心理士の先生　イラスト">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
