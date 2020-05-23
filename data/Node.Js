vscode 초기설정값 한글로!
https://blog.azulpintor.io/entry/how-to-set-language-in-vscode-for-kor

준석님 수업용깃!
https://github.com/joonseokhu/node-2

준석님 아티클!
https://hyper.is/

REST 기반 트랜잭션
https://www.popit.kr/rest-%ea%b8%b0%eb%b0%98%ec%9d%98-%ea%b0%84%eb%8b%a8%ed%95%9c-%eb%b6%84%ec%82%b0-%ed%8a%b8%eb%9e%9c%ec%9e%ad%ec%85%98-%ea%b5%ac%ed%98%84-1%ed%8e%b8/?utm_source=popit&utm_campaign=notice

마이크로서비스 아키텍쳐
https://futurecreator.github.io/2018/09/14/what-is-microservices-architecture/

camelCase
snake_case

let : 변수 값을 수정할 수 있음
const : 수정할 수 없음

(): parentheses
{}: curly bracket

함수가 반환을 생략하면 undefined라는 값을 반환

num++ => num = num + 1;

array 에서 값이 할당되지 않은 index 의 값은 undefined

array 에 
	push 는 array의 마지막 부분에 인자를 삽입
	unshift 는 array의 맨 앞부분에 인자를 삽입
	pop 은 마지막 요소가 제거 + 반환

for loop 는 초기, 종결, 증감값으로만 가능

typeof => 데이터타입

true로 변환되는 값
비어 있지 않은 문자열 / 0이 아닌 모든 숫자 / 모든 객체

false로 변환되는 값
"" (빈문자열) / 0, NaN / null / undefined

코딩컨벤션
https://github.com/airbnb/javascript

문자열 메소드
https://www.w3schools.com/jsref/jsref_obj_string.asp

슬라이싱
https://www.w3schools.com/jsref/jsref_slice_string.asp

NaN은 Not a number 라는 뜻

Number 함수를 사용해서 String에서 Number형으로 전환 ( parseInt, parseFloat 등 도 있음 )

시간
new 연산자 다음에 Date 생성자 new Date => 현재시각

GMT : Greenwich Mean Time / 그리니치 천문대 기준시각

let rightNow = new Date();
let year = rightNow.getFullYear();
let month = rightNow.getMonth()+1;
let date = rightNow.getDate();
let day = rightNow.getDay();
let currentHour = rightNow.getHours();
let currentMin = rightNow.getMinutes();

getTime 메서드로 날짜의 밀리초 표현을 반환

math 객체
https://www.w3schools.com/js/js_math.asp

객체의 property값을 접근하는 방법
	마침표(.) 연산자 - 변수 사용 불가능
	대괄호([]) - 변수 사용 가능

이제는 __proto__ ( 프로토링크 ) 대신 getPrototypeOf 메소드로 변경

중괄호({}, curly brace)로 감싸진 것 : block

변수 이름을 사용할 수 있는 범위 : namespace

switch 문
https://www.w3schools.com/js/js_switch.asp

클래스는 객체(object)를 잘 설계하기 위한 틀 / 특정로직을 갖고 있는 행동 ( method ) 와 변경 가능한 상태 ( 멤버 변수 ) 를 가짐

변경 가능한 상태값이자 class내의 컨텍스트에서 어느 곳에서나 사용할 수 있는 변수 => 멤버 변수

객체 내부에서, 해당 객체의 프로퍼티에 접근하려면 " this " 라는 키워드를 사용해야함

cunstructor - 생성자 함수

class로 객체를 생성하는 과정 = '인스턴스화'

{} 으로 생긴 모양의 객체를 object literal(객체 리터럴)

`` = back tick ( 백틱이라고 부름! )

`` 안에서 변수를 사용하려면 ${} 으로 변수를 감싸줘야함 / python 의 포맷스트링 + 멀티라인 스트링처럼 사용

String 형태의 자료에 대해 조건값에 따른 일치여부를 boolean 으로 반환
	startsWith
	endsWith
	includes

특정 문자열을 반복 => .repeat(3)

공식문서
https://javascript.info/string

브라우저에 데이터를 저장하는 수단
	Local Storage: 해당 도메인에 영구 저장
	Session Storage: 해당 도메인의, 한 세션에서만 저장 ( 창을 닫으면 정보가 날라감 )
	Cookie: 해당 도메인에 설정된 날짜까지만 저장

https://www.quora.com/What-is-the-difference-between-sessionstorage-localstorage-and-Cookies


document 객체

document.cookie 로 브라우저의 쿠키를 호출 가능 ( document 클래스의 cookie 속성 )

localStorage, sessionStorage
	 => 글로벌 변수
	특정 값을 보고 싶으면, getItem
	값을 수정하거나 추가하고 싶으면, setItem

arrow function 은 callback 함수로 사용할 때 가장 많이 사용

a => b 리턴
a => {b} 실행

callback = 인자로 전달되는 함수

array 의 반복문 => map, forEach 메서드

https://www.w3schools.com/js/js_array_iteration.asp

Array.map() => 조건값에 맞춰 변조한 배열을 return

Array.forEach() => 배열의 요소들에 대한 동작 실행 / 원래는 return 값 없음 / 구문을 빠져나오고 싶은시점에서 return

for (let i in array){}

iife

Object.keys(object) / valuse, entries