<template>
  <section>
    <form class="" action="index.html">
      <button type="button" id="show" @click="preview" value="show" name="button">起動</button>
      <button type="button" id="up"   @click="moveUp" value="up" name="button">上</button>
      <button type="button" id="down" onclick="moveDown()" value="down" name="button">下</button>
      <button type="button" id="left" onclick="moveLeft()" value="left" name="button">左</button>
      <button type="button" id="right" onclick="moveRight()" value="right" name="button">右</button>
    </form>
    <div class="" id="result">
    </div>
  </section>
</template>




<script>

"use strict"

let url = location.href;
console.log(url);
let action = 'action';
let params = new URLSearchParams();

methods: {
  fetchApi: function(){
    fetch('app/Services/cameraApi.php' + params)
     .then(function(response){
       console.log(response.status);
       return response.text();
     })
     .then(function(data){
       //resultを取得してきて、response.textを表示させる
       document.getElementById('result').textContent = data;
       console.log(data);
     })
     .catch(function(error){
       document.getElementById('result').textContent = data;
     });
  },
  // function fetchApi(){
  //   fetch('app/Services/cameraApi.php' + params)
  //    .then(function(response){
  //      console.log(response.status);
  //      return response.text();
  //    })
  //    .then(function(data){
  //      //resultを取得してきて、response.textを表示させる
  //      document.getElementById('result').textContent = data;
  //      console.log(data);
  //    })
  //    .catch(function(error){
  //      document.getElementById('result').textContent = data;
  //    });
  // }
  preview: function(){
    let show  = document.getElementById('show').value;
    //.valueでvalue属性を取得
    // let direction = document.getElementById('direction').value;
    console.log(show);
    params.set(action, show);
    console.log(params);
    this.fetchApi();
  }
  // function preview(){
  //    let show  = document.getElementById('show').value;
  //    //.valueでvalue属性を取得
  //    // let direction = document.getElementById('direction').value;
  //    console.log(show);
  //    params.set(action, show);
  //    console.log(params);
  //    fetchApi();
  // }



  // function moveUp(){
  //   let up    = document.getElementById('up').value;
  //   params.set(action, up);
  //   fetchApi();
  // }
  // function moveDown(){
  //   let down = document.getElementById('down').value;
  //   params.set(action, down);
  //   fetchApi();
  // }
  // function moveLeft(){
  //   let left = document.getElementById('left').value;
  //   params.set(action, left);
  //   fetchApi();
  // }
  // function moveRight(){
  //   let right = document.getElementById('right').value;
  //   params.set(action, right);
  //   fetchApi();
  // }
}

  // let url = location.href;
  // console.log(url);
  // let action = 'action';
  // let params = new URLSearchParams();
  //
  //
  // function fetchApi(){
  //   fetch('./api.php?' + params)
  //    .then(function(response){
  //      console.log(response.status);
  //      return response.text();
  //    })
  //    .then(function(data){
  //      //resultを取得してきて、response.textを表示させる
  //      document.getElementById('result').textContent = data;
  //      console.log(data);
  //    })
  //    .catch(function(error){
  //      document.getElementById('result').textContent = data;
  //    });
  // }
  // function preview(){
  //    let show  = document.getElementById('show').value;
  //    //.valueでvalue属性を取得
  //    // let direction = document.getElementById('direction').value;
  //    console.log(show);
  //    params.set(action, show);
  //    console.log(params);
  //    fetchApi();
  // }
  // function moveUp(){
  //   let up    = document.getElementById('up').value;
  //   params.set(action, up);
  //   fetchApi();
  // }
  // function moveDown(){
  //   let down = document.getElementById('down').value;
  //   params.set(action, down);
  //   fetchApi();
  // }
  // function moveLeft(){
  //   let left = document.getElementById('left').value;
  //   params.set(action, left);
  //   fetchApi();
  // }
  // function moveRight(){
  //   let right = document.getElementById('right').value;
  //   params.set(action, right);
  //   fetchApi();
  // }

</script>
