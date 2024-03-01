@extends('layouts.app')

@section('title', $page->title ?? '')

@section('content')

    <div id="contentArea">

        {{--html埋め込み部分 start--}}

        <main id="main_wrap">

            <!--font noto sans jp-->
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">

            {{--font-family: "futura-pt-condensed", sans-serif;--}}
            <link rel="stylesheet" href="https://use.typekit.net/fkf1avs.css">

            <link rel="stylesheet" media="all" href="./css/welfare.css"/>
            <script type="text/javascript" src="./js/welfare.js"></script>

            <div id="welfare">

                <div class="main-banner">
                    <div class="inner">
                        <h1 class="headingMain"><span>採用について</span></h1>
                    </div>
                </div>

                <div class="recruitment-example">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>採用事例</span></h2>
                        <div class="description js-fadein">
                            <p class="text">大成建設では、<br/>
                                視覚・聴覚・音声言語・上肢・下肢<br class="sp-br"/>・体幹・<br class="pc-br"/>
                                心臓・じん臓・ぼうこう<br class="sp-br"/>・直腸・小腸・肝臓・精神・発達など<br/>
                                障がいのある社員が<br class="sp-br"/>約160名働いております。<br class="sp-br"/>（2023年12月時点）</p>
                            <p class="text">採用事例の一部をご紹介いたします。</p>
                        </div>

                        <ul class="recruitmentList">
                            <li class="recruitmentItem js-fadein">
                                <div class="recruitment-inner">
                                    <span class="number">01</span>
                                    <dl>
                                        <dt>仕事内容</dt>
                                        <dd>本社設計本部</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい種別</dt>
                                        <dd>聴覚障がい</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい等級</dt>
                                        <dd>2級</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="recruitmentItem js-fadein">
                                <div class="recruitment-inner">
                                    <span class="number">02</span>
                                    <dl>
                                        <dt>仕事内容</dt>
                                        <dd>本社管理本部</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい種別</dt>
                                        <dd>心臓機能障がい</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい等級</dt>
                                        <dd>4級</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="recruitmentItem js-fadein">
                                <div class="recruitment-inner">
                                    <span class="number">03</span>
                                    <dl>
                                        <dt>仕事内容</dt>
                                        <dd>本社管理本部</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい種別</dt>
                                        <dd>上下肢障がい</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい等級</dt>
                                        <dd>1級</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="recruitmentItem js-fadein">
                                <div class="recruitment-inner">
                                    <span class="number">04</span>
                                    <dl>
                                        <dt>仕事内容</dt>
                                        <dd>技術センター</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい種別</dt>
                                        <dd>聴覚障がい</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい等級</dt>
                                        <dd>2級</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="recruitmentItem js-fadein">
                                <div class="recruitment-inner">
                                    <span class="number">05</span>
                                    <dl>
                                        <dt>仕事内容</dt>
                                        <dd>支店管理部門</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい種別</dt>
                                        <dd>発達障がい</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい等級</dt>
                                        <dd>2級</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="recruitmentItem js-fadein">
                                <div class="recruitment-inner">
                                    <span class="number">06</span>
                                    <dl>
                                        <dt>仕事内容</dt>
                                        <dd>支店管理部門</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい種別</dt>
                                        <dd>視覚障がい</dd>
                                    </dl>
                                    <dl>
                                        <dt>障がい等級</dt>
                                        <dd>1級</dd>
                                    </dl>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="data">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>数字で見る大成建設の障がい者採用</span></h2>
                        <div class="data-content">
                            <ul class="dataList">
                                <li class="dataItem item01 js-fadein">
                                    <div class="dataItem-info">
                                        <h2 class="title">担当業務<br/>（主に内勤）</h2>
                                        <div class="dataInfo">
                                            <div class="image-icon">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image_01_sp.png 2x')}}">
                                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image_01_pc.png')}}">
                                                    <img class="mvPicture" src="{{asset('images/contentBox/welfare/welfare_image_01_pc.png')}}" alt="障害者がオフィスで働くイメージ">
                                                </picture>
                                            </div>
                                            <div class="chartData">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image_02_sp.png 2x')}}">
                                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image_02_pc.png')}}">
                                                    <img class="mvPicture" src="{{asset('images/contentBox/welfare/welfare_image_02_pc.png')}}" alt="大成建設での担当業務データ">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dataItem item02 js-fadein">
                                    <div class="dataItem-info">
                                        <h2 class="title">障がい区分</h2>
                                        <div class="dataInfo">
                                            <div class="chartData">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image_03_sp.png 2x')}}">
                                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image_03_pc.png')}}">
                                                    <img class="mvPicture" src="{{asset('images/contentBox/welfare/welfare_image_03_pc.png')}}" alt="大成建設での障がい区分データ">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dataItem-info">
                                        <h2 class="title">等級区分</h2>
                                        <div class="dataInfo">
                                            <div class="chartData">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image_04_sp.png 2x')}}">
                                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image_04_pc.png')}}">
                                                    <img class="mvPicture" src="{{asset('images/contentBox/welfare/welfare_image_04_pc.png')}}" alt="大成建設での等級区分データ">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dataItem item03 js-fadein">
                                    <div class="dataItem-info">
                                        <h2 class="title">勤続年数</h2>
                                        <div class="dataInfo">
                                            <div class="chartData">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image_05_sp.png 2x')}}">
                                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image_05_pc.png')}}">
                                                    <img class="mvPicture" src="{{asset('images/contentBox/welfare/welfare_image_05_pc.png')}}" alt="大成建設での勤続年数データ">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dataItem-info">
                                        <h2 class="title">年代</h2>
                                        <div class="dataInfo">
                                            <div class="chartData">
                                                <picture>
                                                    <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/welfare/welfare_image_06_sp.png 2x')}}">
                                                    <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/welfare/welfare_image_06_pc.png')}}">
                                                    <img class="mvPicture" src="{{asset('images/contentBox/welfare/welfare_image_06_pc.png')}}" alt="大成建設での年代データ">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="selection-process">
                    <div class="inner">
                        <h2 class="heading-block js-fadein"><span>選考の流れ</span></h2>
                        <ul class="selectionProcess-list">
                            <li class="selectionProcess-item js-fadein">
                                <div class="title">
                                    <p class="ttl-number">STEP<span>1</span></p>
                                    <p class="ttl">エントリー</p>
                                </div>
                                <div class="stepInfo">
                                    <p class="text">履歴書、障がい者手帳のコピーを<br class="sp-br"/>郵送いただきます。</p>
                                </div>
                            </li>
                            <li class="selectionProcess-item js-fadein">
                                <div class="title">
                                    <p class="ttl-number">STEP<span>2</span></p>
                                    <p class="ttl">WEBテスト（SPI3）</p>
                                </div>
                                <div class="stepInfo">
                                    <p class="text">基礎能力確認のため、<br class="sp-br"/>SPIテストを受験いただきます。</p>
                                </div>
                            </li>
                            <li class="selectionProcess-item js-fadein">
                                <div class="title">
                                    <p class="ttl-number">STEP<span>3</span></p>
                                    <p class="ttl">一次面接</p>
                                </div>
                                <div class="stepInfo">
                                    <p class="text">人事部担当者における個別面接でお話をお伺いします。<br/>（対面またはオンライン）</p>
                                </div>
                            </li>
                            <li class="selectionProcess-item js-fadein">
                                <div class="title">
                                    <p class="ttl-number">STEP<span>4</span></p>
                                    <p class="ttl">二次面接</p>
                                </div>
                                <div class="stepInfo">
                                    <p class="text">人事部上席者による個別面接でお話を伺います。<br/>（対面またはオンライン）</p>
                                </div>
                            </li>
                            <li class="selectionProcess-item js-fadein">
                                <div class="title">
                                    <p class="ttl-number">STEP<span>5</span></p>
                                    <p class="ttl">最終面接</p>
                                </div>
                                <div class="stepInfo">
                                    <p class="text">人事部長による面接です<br class="sp-br"/>（本社にて対面形式）<br/>支店での就労希望者は、支店での面接が実施されます。</p>
                                </div>
                            </li>
                            <li class="selectionProcess-item js-fadein">
                                <div class="title">
                                    <p class="ttl-number">STEP<span>6</span></p>
                                    <p class="ttl">内定・採用</p>
                                </div>
                                <div class="stepInfo">
                                    <p class="text">配属先は障がい特性を考慮して決定いたします。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </main>

        {{--html埋め込み部分 end--}}

    </div>

@endsection
