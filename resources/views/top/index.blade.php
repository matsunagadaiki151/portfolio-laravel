@extends('layouts.portfolio')

@section('title', '自己紹介')


@section('contents')
    <div class="top">
        <p>Welcome to<br>
        My Portfolio</p> 
    </div>
    <div class="tech">
        <div class="available">
            <p>できること</p>
        </div>
        <div class="technologies">
            <div class="tech-content">
                <div class="tech-wrapper">
                    <div class="technology">
                        <img src="images/ai.png" alt="">
                        <h3>機械学習</h3>
                        <p>Python : pandas numpy <br> scikit-learn Pytorch等<br>
                        SIGNATE : Advance<br>
                        自然言語処理に関する論文の執筆経験</p>
                    </div>
                </div>
            </div>
            <div class="tech-content">
                <div class="tech-wrapper">
                    <div class="technology">
                        <img src="images/web.png" alt="">
                        <h3>Web</h3>
                        <p>HTML CSS JavaScript
                            <br>Node.js
                            <br>PHP
                            <br>ハッカソンへの参加<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tech-content">
                <div class="tech-wrapper">
                    <div class="technology">
                        <img src="images/gia.jpeg" alt="">
                        <h3>Other</h3>
                        <p>TOEIC 790点 <br>
                            Azureの使用経験あり<br>
                            AtCoder 8回参加<br>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
    <div class="link">
        <p class="link-title">link</p>
        <div class="link-wrapper">
            <div class="link-contents">
                <a class="link-btn twitter" href="https://twitter.com/giranaga"> 
                <i style="color:white" class="fab fa-twitter"></i>
                <span>twitter</span>
                </a>
            </div>
            <div class="link-contents" >
                <a class="link-btn github" href="https://github.com/matsunagadaiki151"> 
                <i style="color:white" class="fab fa-github"></i>
                <span>github</span> 
                </a>
            </div>
            <div class="link-contents">
                <a class="link-btn wantedly" href="https://www.wantedly.com/id/matsunagadaiki151">
                <span>wantedly</span>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
@endsection