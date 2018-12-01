@extends('layouts.app')

@section('content')
  <div align="center"><h1>{{$title}}</h1></div>

<div align="center"><b><img src="https://raw.githubusercontent.com/nakeshialorde/Online-Courses/master/img/numbers.PNG" /></b></div>


  <div align="center"><p><small><b>Click on each item below for definition.</b></small></p></div>

<div class="container">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><b>Natural Numbers</b></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body"><b>The set of counting numbers, that is, ℕ={1,2,3,4...}.</b></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><b>Whole Numbers</b></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><b>The set of positive integers or zero. Whole numbers include 0,1,2,3,4,5,6,7,8,9,10, ... and are represented by 𝕎 .</b></div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><b>Integers</b></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body"><b>The set consisting of the positive and negative whole numbers and zero, ℤ={...,-2,-1,0,1,2...}. All integers are rational numbers and represented by ℤ. &there4; N &sub; W &sub; Z.</b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><b>Rational Numbers</b></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body"><b>Numbers that can be expressed as the quotient of two integers (that is any number that can be expressed as a fraction). For example, <sup>7</sup>&frasl;<sub>3</sub>, <sup>5</sup>&frasl;<sub>11</sub>, <sup>-5</sup>&frasl;<sub>13</sub> or <sup>p</sup>&frasl;<sub>q</sub>, where p and q are integers, q&ne;0. Rational Numbers are also decimals (recurring or terminating), the decimal representation of a rational number either terminates <sup>1</sup>&frasl;<sub>2</sub> = 0.5 or repeats in a regular pattern, for example <sup>100</sup> &frasl; <sub>3</sub> = 33.333333 All integers are rational numbers with the denominator of 1, for example,<br />
      	<sup>5</sup> &frasl; <sub>1</sub> = 5. &there4; N &sub; W &sub; Z &sub; Q. </b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><b>Irrational Numbers</b></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body"><b>A number that cannot be represented as an exact ratio of two integers, de. For examples, &pi; or &radic;2, decimals (recurring or terminating), or common fractions. For example, &radic;2, &radic;7 and &Pi;. The decimal representation of irrational numbers neither terminates nor repeats in a regular pattern, for example, &Pi; = 3.1415926.</b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><b>Real Numbers</b></a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body"><b>The union of the set of rational numbers and the set of irrational numbers. Real numbers are represented by the symbol ℝ. &there4; N &sub; W &sub; Z &sub; Q &sub; R. </b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><b>Inclusion Relations</b></a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body"><b>A number that is a member of a set. </b></div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><b>Sequences of Numbers</b></a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body"><b>The set consisting of the positive and negative whole numbers and zero, ℤ={...,-2,-1,0,1,2...} that are connected in a series with a pattern or definite law, with each number in the sequence called a term. For example, 2,4,6,8, 10, each term in the sequence is formed by adding two, and each term is an even number. Similarly. 2,4,16,256,..., is a sequence with the definite law following a pattern of each term being multiplied by the term before.</b></div>
      </div>



  </div>
</div>

<script>
$('.collapse').collapse()
</script>

<div class = "container">
     <div class = "jumbotron text-center"><h3>End of Chapter Quiz </h3> <br />
  <br /><center><img src="https://images.pexels.com/photos/256519/pexels-photo-256519.jpeg?auto=compress&cs=tinysrgb&h=350" class="img-responsive" alt="" /></center>
  <br /><br /><a class="btn btn-success btn-lg" style="float:center" href="/" onclick="quiz()"role="button">Start Quiz</a></p>

</div>
</div>

  <div ng-app="ngQuiz" ng-controller="ngQuizController" class="quiz">
    <image-preload></image-preload>
    <div class="progress" ng-if="quizProgress.inProgress && quizProgress.currentQuestion <= quizProgress.lastQuestion">
      <span ng-cloak class="counter">Question {{quizProgress.currentQuestionFriendly}} of {{quizProgress.lastQuestion}}</span>
      <div class="progress-bar" progress-bar></div>
    </div>
    <div class="content">
      <!-- intro -->
      <section ng-cloak class="intro fade-in" ng-if="!quizProgress.loading && !quizProgress.inProgress && !quizProgress.finished">
        <div ng-cloak class="row">
          <div class="col-xs-6">
            <h1>{{::quizMetadata.title}}</h1>
            <p>{{::quizMetadata.intro}}</p>
          </div>
          <div class="col-xs-6">
            <img ng-src="{{quizMetadata.introImg}}" />
            <aside class="figure-caption text-xs-right" ng-if="quizMetadata.introImgCredit">Photo credit: {{::quizMetadata.introImgCredit}}</aside>
          </div>
        </div>
        <div class="row">
          <button class="pull-right btn btn-success" ng-click="startQuiz()">Start Quiz</button>
        </div>
      </section>

      <!-- question list -->
      <section ng-cloak class="fade-in question" ng-if="quizProgress.inProgress && quizProgress.currentQuestion <= quizProgress.lastQuestion">
        <div animate-progression>
          <div class="text-center">
            <img class="img-responsive" ng-src="{{quizQuestions[quizProgress.currentQuestion].questionImg}}" />
          </div>

          <p class="question-content">{{quizQuestions[quizProgress.currentQuestion].question}}</p>
          <div class="question-options">
            <div ng-repeat="option in quizQuestions[quizProgress.currentQuestion].options | orderBy: '-'">
              <div class="option" ng-class="{'wrong': quizQuestions[quizProgress.currentQuestion].answerChecked && option.selected && !option.correct, 'correct': option.correct && quizQuestions[quizProgress.currentQuestion].answerChecked, 'dim': quizQuestions[quizProgress.currentQuestion].answerChecked}">
                <input type="radio" name="option" id="{{$index}}" ng-click="answerQuestion({selected: option.name})" ng-disabled="quizQuestions[quizProgress.currentQuestion].answerChecked">
                <label for="{{$index}}">{{option.name}}</label>
              </div>
              <div class="row feedback" ng-if="quizQuestions[quizProgress.currentQuestion].answerChecked && option.correct">
                <span ng-bind-html="quizQuestions[quizProgress.currentQuestion].feedback"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <button ng-if="quizProgress.currentQuestion === -1" class="btn btn-primary" ng-click="startQuiz()">Start Quiz</button>
            <button ng-if="quizQuestions[quizProgress.currentQuestion].answerChecked && quizProgress.currentQuestionFriendly !== quizProgress.lastQuestion" class="btn btn-primary pull-right" ng-click="nextQuestion()">Next Question <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            <button ng-if="!quizQuestions[quizProgress.currentQuestion].answerChecked" ng-disabled="!quizQuestions[quizProgress.currentQuestion].answered" class="btn btn-primary pull-right" ng-click="checkAnswer()">Check Answer</button>
          </div>
        </div>

        <div class="get-my-results text-center" ng-if="quizProgress.currentQuestionFriendly === quizProgress.lastQuestion && quizQuestions[quizProgress.currentQuestion].answerChecked">
          <button class="pulse btn btn-primary" ng-click="getScore()">Get My Results</button>
        </div>
      </section>

      <section class="loading" ng-if="quizProgress.loading || quizProgress.calculatingScore">
        <div class="loader"></div>
      </section>

      <section class="fade-in" ng-if="!quizProgress.calculatingScore && !quizProgress.inProgress && quizProgress.currentQuestionFriendly === quizProgress.lastQuestion">
        <div class="results">
          <div class="text-center">
            <h1>Your Score</h1>
            <h2>{{score}}</h2>
          </div>
        </div>

        <div class="text-center">
          <button class="start-over btn btn-success" ng-click="startOver()"><i class="fa fa-repeat" aria-hidden="true"></i>Try Again</button>
        </div>
      </section>
  </div>



  <br/><br/><br/><div align="center"><h4>Chapter Progress</h4></div>
<div class="progress" style="float:bottom">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width:0%">
    0%
  </div>
</div>

<p><a class="btn btn-primary btn-lg" style="float:right" href="/realnumbers" role="button">Continue</a>

@endsection
