const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');
const saveChangesBtn = document.getElementById('saveChangesBtn');
const modal = document.getElementById('myModal');
const channelmodal = document.getElementById('crud-modal');
const updatechannel = document.getElementById('updateChannel');
const updatemodal = document.getElementById('updateServerModal');
const openUpdateModalBtn = document.getElementById('openUpdateModalBtn');
const saveUpdateChangesBtn = document.getElementById('saveUpdateChangesBtn');
const closeUpdateModalBtn = document.querySelector('.close');
const createChannelBtn = document.getElementById('openCreateChannel');
const closeChannelBtn = document.getElementById('closeChannel')
const updateChannelBtn = document.getElementById('openUpdateChannel');
const closeUpdateChannelBtn = document.getElementById('closeUpdateChannel');


createChannelBtn.addEventListener('click', ()=> {
    channelmodal.classList.remove('hidden')
});
closeChannelBtn.addEventListener('click', ()=>{
    channelmodal.classList.add('hidden');
})
openModalBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
});
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
});
window.onload = function() {
    setTimeout(function() {
        const sessionStatus = document.getElementById('sessionStatus');
        if (sessionStatus) {
            sessionStatus.style.display = 'none';
        }
    }, 1000);
};
// function openUpdateModal(serverId) {
//     const modal = document.getElementById('updateServerModal');
//     const serverIdInput = modal.querySelector('input[name="server_id"]');
//     serverIdInput.value = serverId; 
//     const updateChannelForm = modal.querySelector("#updateChannelForm")
//     updateChannelForm.action = `/servers/${serverId}`
//     modal.classList.remove('hidden'); 
   
// }

updateChannelBtn.addEventListener('click', (event)=>{
    event.stopPropagation();
    updatechannel.classList.remove('hidden')
})
closeUpdateChannelBtn.addEventListener('click',()=>{
    updatechannel.classList.add('hidden')
})
// closeUpdateModalBtn.addEventListener('click', () => {
//     updatemodal.classList.add('hidden');
// });