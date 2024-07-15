document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
    const curriculumItems = document.querySelectorAll('.curriculum-title');
	const enrollBtn = document.getElementById('enroll-btn');
    const enrollFormContainer = document.getElementById('enroll-form-container');
    const closeBtn = document.getElementById('close-btn');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const tabContent = document.querySelector(`#${tab.getAttribute('data-tab')}`);
            tabContents.forEach(tc => tc.style.display = 'none');
            tabContent.style.display = 'block';
        });
    });

    curriculumItems.forEach(item => {
        item.addEventListener('click', function() {
            const sublist = this.nextElementSibling;
            sublist.style.display = sublist.style.display === 'none' || sublist.style.display === '' ? 'block' : 'none';
            this.classList.toggle('active');
        });
    });
	enrollBtn.addEventListener('click', function() {
        enrollFormContainer.style.display = 'flex';
    });

    closeBtn.addEventListener('click', function() {
        enrollFormContainer.style.display = 'none';
    });

    // Show description content by default when the page loads
    document.querySelector('.tab[data-tab="description"]').click();
});
