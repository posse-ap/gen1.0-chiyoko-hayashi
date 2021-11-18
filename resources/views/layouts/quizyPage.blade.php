<html>
<head>
    <title>@yield('title')</title>
    <style>
        /* ページ全体 */
        
        .main {
            margin: 0 auto;
            width: 570px;
            margin-top: 90px;
            margin-bottom: 90px;
        }
        
        /* 問題 */
        
        .quiz {
            margin-top: 20px;
        }
        
        .quiz h1 {
            font-size: 19px;
            line-height: 27px;
            font-weight: 700;
            margin-bottom: 0;
            color: #161616;
        }
        
        .quiz img {
            width: 100%;
            margin: 0 auto 0;
        }
        
        .quiz ul {
            list-style: none;
            margin: 10px 0;
            padding: 13px 0;
        }
        
        .quiz li {
            display: block;
            border: 1px solid #ebebeb;
            padding: 13px;
            margin: 10px 0;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 3px 2px -2px rgb(0 0 0 / 13%);
            -webkit-box-shadow: 0 3px 2px -2px rgb(0 0 0 / 13%);
        }
        
        /* 選択肢（回答前） */
        
        .quiz .answerlist {
            cursor: pointer;
        }
        
        /* 選択肢（回答後）（正解） */
        
        .quiz .answer_valid {
            background-color: #08b3f0;
            color: #ffffff;
        }
        
        /* 選択肢（回答後）（不正解） */
        
        .quiz .answer_invalid {
            background-color: #fd6647;
            color: #ffffff;
        }
        
        /* 問題 答えボックス */
        
        .quiz .answerbox {
            display: none;
            height: 77px;
            line-height: 30px;
        }
        
        /* 問題 答えボックス 正解 */
        
        .quiz .answerbox_valid {
            background: linear-gradient(transparent 70%, #08b3f0 0);
        }
        
        /* 問題 答えボックス 不正解 */
        
        .quiz .answerbox_invalid {
            background: linear-gradient(transparent 70%, #fd6647 0);
        }
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        <div class="main">
            <div class="content">
            @yield('content')
            </div>
        </div>
    </body>
    </html>