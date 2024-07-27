const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');
const modal = document.getElementById('myModal');
const channelmodal = document.getElementById('crud-modal');
const createChannelBtn = document.getElementById('openCreateChannel');
const closeChannelBtn = document.getElementById('closeChannel')
openModalBtn.addEventListener('click', () => {
    modal.classList.remove('hidden');
});

closeModalBtn.addEventListener('click', () => {
    modal.classList.add('hidden');
});
createChannelBtn.addEventListener('click', ()=> {
    channelmodal.classList.remove('hidden')
});
closeChannelBtn.addEventListener('click', ()=>{
    channelmodal.classList.add('hidden');
})