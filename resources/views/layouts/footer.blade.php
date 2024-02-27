@php
/** @var \App\Models\FEnt\FEntPage $page */
$frontendSettings = $page->fEntConfig->frontendSettings;
$corporations = $page->fEntConfig->corporations;

$imgSrc = '';
$imgSrcSP = '';
if(isset($frontendSettings['footer']['corpInfo']['type']) || isset($frontendSettings['logo'])){

    if(isset($frontendSettings['footer']['corpInfo']['type'])){
        $imgSrc = $frontendSettings['footer']['corpInfo']['pcImg'];
        $imgSrcSP = $frontendSettings['footer']['corpInfo']['spImg'];
    }elseif(isset($frontendSettings['logo'])){
        $imgSrc = $frontendSettings['logo'];
        $imgSrcSP = $frontendSettings['logo'];
    }

    $needle   = '/';
    $pos = strpos($imgSrc, $needle);
    if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
        $imgSrc = '';
    }elseif($pos === 0){ // システム内の相対パスのためURL生成
        $imgSrc = url($imgSrc);
    }
    $pos = strpos($imgSrcSP, $needle);
    if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
        $imgSrcSP = '';
    }elseif($pos === 0){ // システム内の相対パスのためURL生成
        $imgSrcSP = url($imgSrcSP);
    }
}
@endphp

<div id="cmnFooter">
    <footer id="footer" class="footer">
        <div id="pageTop" class="pageTop">
            <a href="#" class="pageTopAnchor">
                <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65">
                    <g id="pagetop_btn_pc" style="isolation: isolate">
                        <rect id="Rectangle_1031" data-name="Rectangle 1031" width="65" height="65" transform="translate(0 0)" fill="#003180"/>
                        <g id="装飾" transform="translate(752 133.769)">
                            <g id="Group_24205" data-name="Group 24205" transform="translate(-752 -133.769)">
                                <path id="Path_5456" data-name="Path 5456" d="M36.389,65H0L36.389,0Z" transform="translate(28.611)" fill="#335a99" opacity="0.6" style="mix-blend-mode: screen;isolation: isolate"/>
                                <path id="Path_5453" data-name="Path 5453" d="M44.726,55.319H0L44.726,0Z" transform="translate(20.274 9.681)" fill="#335a99" opacity="0.6" style="mix-blend-mode: overlay;isolation: isolate"/>
                                <path id="Path_5455" data-name="Path 5455" d="M65,31.907H0L65,0Z" transform="translate(0 33.093)" fill="#335a99" opacity="0.4" style="mix-blend-mode: multiply;isolation: isolate"/>
                            </g>
                            <g id="Group_24206" data-name="Group 24206" transform="translate(-752 -133.769)">
                                <path id="Path_5456-2" data-name="Path 5456" d="M0,0H36.389L0,65Z" fill="#335a99" opacity="0.6" style="mix-blend-mode: screen;isolation: isolate"/>
                                <path id="Path_5453-2" data-name="Path 5453" d="M0,0H44.726L0,55.319Z" fill="#335a99" opacity="0.6" style="mix-blend-mode: overlay;isolation: isolate"/>
                                <path id="Path_5455-2" data-name="Path 5455" d="M0,0H65L0,31.907Z" fill="#335a99" opacity="0.4" style="mix-blend-mode: multiply;isolation: isolate"/>
                            </g>
                        </g>
                        <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M18,20.679l8.93-8.937a1.681,1.681,0,0,1,2.384,0,1.7,1.7,0,0,1,0,2.391L19.2,24.258a1.685,1.685,0,0,1-2.327.049L6.68,14.14a1.688,1.688,0,0,1,2.384-2.391Z" transform="translate(50.496 34.747) rotate(180)" fill="#fff"/>
                        <text id="PAGE_TOP" data-name="PAGE
TOP" transform="translate(33 40)" fill="#fff" font-size="14" font-family="FuturaPT-Demi, Futura PT" font-weight="300"><tspan x="-16.632" y="0">PAGE</tspan><tspan x="-12.229" y="16">TOP</tspan></text>
                    </g>
                </svg>
            </a>
        </div><!-- #pageTop -->
        <div id="searchJobsBtn" class="SPdisp">
            <p class="searchJobsBtn-bnr">
                <a href="{{route('search')}}">
                    <span class="en">SEARCH JOBS</span>
                    <span class="ja">お仕事検索</span>
                </a>
            </p>
        </div><!-- #searchJobsBtn -->
        <div class="footerLayout">
            @if(isset($frontendSettings['footer']['corpInfo']) || isset($corporations[0]))
            <div class="footerCorpInfo">
                @if(isset($frontendSettings['footer']['displayTitle']) && $frontendSettings['footer']['displayTitle'])
                <div class="footerTitle">
                @if(isset($frontendSettings['footer']['corpInfo']['type']) || isset($frontendSettings['logo']))
                    @if(isset($frontendSettings['footer']['corpInfo']['type']))
                        @if($frontendSettings['footer']['corpInfo']['type'] == 'text')
                            <span>
                            {{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}
                            </span>
                        @endif
                        @if($frontendSettings['footer']['corpInfo']['type'] == 'image' && isset($frontendSettings['footer']['corpInfo']['pcImg']))
{{--                            <img src="{{$imgSrc ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">--}}
                            <a href="{{route('top')}}">
                                <picture>
                                    <source media="(max-width: 767px)" srcset="{{$imgSrcSP ?? ''}} 2x">
                                    <source media="(min-width: 768px)" srcset="{{$imgSrc ?? ''}} 2x">
                                    <img class="sizes" src="{{$imgSrc ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">
                                </picture>
                            </a>
                        @endif
                    @elseif(isset($frontendSettings['logo']))
                        <img src="{{$frontendSettings['logo'] ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">
                    @endif
                @endif
                    <p class="title-logo">大成建設株式会社 障がい者 採用サイト</p>
                </div>
                @endif
                @if(isset($frontendSettings['footer']['displayAddress']) && $frontendSettings['footer']['displayAddress'])
                <div class="footerAddress">
                    @php
                        $footerZipCode = $frontendSettings['footer']['corpInfo']['zipCode'] ?? $corporations[0]['zip'] ?? '';
                        $footerAddress = "東京都新宿区西新宿1-25-1（新宿センタービル）";
                        $footerTel = $frontendSettings['footer']['corpInfo']['tel'] ?? $corporations[0]['tel'] ?? '';
                        $footerFax = $frontendSettings['footer']['corpInfo']['fax'] ?? $corporations[0]['fax'] ?? '';
                    @endphp
                    @if($footerZipCode)
                        <p>{{$footerZipCode}}</p>
                    @endif
                    @if($footerAddress)
                        <p>{!! nl2br(e($footerAddress)) !!}</p>
                    @endif
                    @if($footerTel)
                        <p>TEL：{{$footerTel}}</p>
                    @endif
                    @if($footerFax)
                        <p>FAX：{{$footerFax}}</p>
                    @endif
                </div>
                @endif
                @if(isset($frontendSettings['footer']['displayCopyright']) && $frontendSettings['footer']['displayCopyright'])
                <p class="copyright">
                    <small>&#169; {{$corporations[0]['corpFullName']??$frontendSettings['title'] ?? ''}} <span>All rights reserved.</span></small>
                </p>
                @endif
            </div>
            @endif

            @if((isset($frontendSettings['footer']['displayNavigation']) && $frontendSettings['footer']['displayNavigation']) && isset($frontendSettings['footer']['nav']))
            <nav class="footerRemoteNav">
                @php
                $blankRemoteNavTargetList = array();
                @endphp
                <ul class="footerRemoteNavList">
                    @foreach($frontendSettings['footer']['nav'] as $item)
                        @if(isset($item['class']) && $item['class'] === 'remoteNav')
                            @php
                                $blankRemoteNavTargetList[] = $item;
                            @endphp
                            @continue
                        @endif
                        <x-navigation.footerNavItem :navItem="$item" />
                    @endforeach
                </ul>
                @if(count($blankRemoteNavTargetList) > 0)
                <ul class="footerBlankRemoteNavList">
                @foreach($blankRemoteNavTargetList as $item)
                    <x-navigation.footerNavItem :navItem="$item" />
                @endforeach
                </ul>
                @endif
            </nav>
            @endif
        </div>
    </footer>
</div>
