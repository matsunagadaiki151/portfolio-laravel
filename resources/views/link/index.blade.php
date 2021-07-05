@extends('layouts.portfolio')

@section('title', 'リンク')


@section('contents')
<div class="header-space"></div>
<div class="links-container">
    <div class="links-title">
        <h1>関連リンク</h1>
    </div>
    <div class="basic">
        <h2>基本</h2>
        <p><a href="https://twitter.com/giranaga"> Twitter</a> : 触った技術や、参加したイベントなどの情報を共有しています。
        フォローしてくれると嬉しいです。</p>
        <p><a href="https://www.wantedly.com/id/matsunagadaiki151"> wantedly</a> : 主に、アルバイトやインターンシップを探すために利用しています。
        ベンチャー企業の動向がしれて面白いです。</p>
        <p><a href="https://github.com/matsunagadaiki151"> github</a> : 自分が、作ったプログラムを公開しています。
            <a href="https://github.com/matsunagadaiki151/FairseqTutorial">機械翻訳に関連するチュートリアルのリポジトリ</a>がおすすめです。</p>
    </div>
    <div class="academy">
        <h2>論文</h2>
        <p><a href="https://www.anlp.jp/proceedings/annual_meeting/2021/pdf_dir/P1-11.pdf"> Transformerにおける知識蒸留の適用</a> : 2021年3月の言語処理学会第27回年次大会で発表しました。</p>
    </div>
    <div class="article">
        <h2>記事</h2>
        <p><a href="https://prog-g.github.io/2020/04/09/OpenNMT%E3%81%A7%E6%A9%9F%E6%A2%B0%E7%BF%BB%E8%A8%B3.html">OpenNMTで機械翻訳</a> : 機械翻訳を誰でも手軽に実装できるように書いた記事です。
                                            <a href="https://github.com/matsunagadaiki151/FairseqTutorial">Fairseq版</a>もあります。</p>
    </div>
    <div class="circle">
        <h2>サークル</h2>
        <p>岐阜大学プログラミングサークル(Prog-G)に所属しています。</p>
        <p><a href="https://prog-g.github.io/"> 公式Webサイト</a> : 公式Webサイトです。
        メンバーが定期的にプログラミングに関する記事を書きます。</p>
        <p><a href="https://twitter.com/prog_g"> Twitter</a> : サークルの公式Twitterです。</p>
    </div>
    <div class='questinare'>
        <h2>アンケート</h2>
        <p>最もよかったリンクはどれですか?</p>
        <form action='/link' method='post'>
            @csrf
            <select name='titles' id='title'>
                @foreach ($items_id_sort as $item)
                <option name="title" value="{{$item->title}}">{{$item->title}}</option>
                @endforeach
            </select>
            <input type='submit' value='投票'>
        </form>
    </div>
    <div class="votes">
        <h2>人気のリンクランキング</h2>
        <div class="ranking">
            @foreach ($items as $item)
            @if ($item->vote_num != 0)
            <p>{{$item->title . " : " . $item->vote_num}}票</p>
            @endif
            @endforeach
        </div>
    </div>
</div>
@endsection