<template>
   <div class="full"><div class="loader"></div></div> 
</template>

<script>

</script>

<style>
.full
{   
    height: 100vh;
    width: 100vw;
    position: fixed;
    backdrop-filter:grayscale(1) blur(2px);
}
 .loader {
  animation:spin 1s infinite linear;
  border:solid 2vmin transparent;
  border-radius:50%;
  border-right-color:#FF903F;
  border-top-color:#FF903F;
  box-sizing:border-box;
  height:20vmin;
  left:calc(50% - 10vmin);
  position:fixed;
  top:calc(50% - 10vmin);
  width:20vmin;
  z-index:1;
  }
  .loader:before {
    animation:spin 2s infinite linear;
    border:solid 2vmin transparent;
    border-radius:50%;
    border-right-color:#ff7a1c;
    border-top-color:#ff7a1c;
    box-sizing:border-box;
    content:"";
    height:16vmin;
    left:0;
    position:absolute;
    top:0;
    width:16vmin;
  }
  .loader:after {
    animation:spin 3s infinite linear;
    border:solid 2vmin transparent;
    border-radius:50%;
    border-right-color:#f8a970;
    border-top-color:#f8a970;
    box-sizing:border-box;
    content:"";
    height:12vmin;
    left:2vmin;
    position:absolute;
    top:2vmin;
    width:12vmin;
  }

@keyframes spin {
  100% {
    transform:rotate(360deg);
  }
}
</style>