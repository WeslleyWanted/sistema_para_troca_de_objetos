function onClick(element,position){
    var i=0;
    for(i=0;i<=8;i++)
    document.getElementsByName("friend")[i].style.backgroundColor="lightgray";
    document.getElementsByName("friend")[position].style.backgroundColor="green";
    setFriendInBoxCenter(position);
}
function setFriendInBoxCenter(position){
    document.getElementById("selectedFriendName").innerText=document.getElementsByName("friend")[position].innerText;
    document.getElementById("selectedFriendPhotoImg").src=document.getElementsByName("friendImg")[position].src;
    var i=0;
    while(document.getElementsByName("imageFriendInTradeBox")[i].src!=document.getElementsByName("friendImg")[position].src){
        document.getElementsByName("imageFriendInTradeBox")[i].src=document.getElementsByName("friendImg")[position].src;
        i++;
    }
}
function onMouseOver(name,position){
    document.getElementsByName(name)[position].style.backgroundColor="white";
}
function onMouseOut(name,position){
    document.getElementsByName(name)[position].style.backgroundColor="lightgray";
}