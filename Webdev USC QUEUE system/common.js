function storeFormData() {
    const formData = {
        name: document.querySelector('input[name="name"]').value,
        idNumber: document.querySelector('input[name="id_number"]').value,
        school: document.querySelector('select').value,
    };

    localStorage.setItem('formData', JSON.stringify(formData));
}

function showProfileDetails() {
    const storedFormData = localStorage.getItem('formData');
    if (storedFormData) {
        const formData = JSON.parse(storedFormData);
        const modalContent = `
            <div class="modal-content" onclick="closeProfileModal()">
                <h2>Your Profile</h2>
                <p><strong>Name:</strong> ${formData.name}</p>
                <p><strong>ID Number:</strong> ${formData.idNumber}</p>
                <p><strong>School:</strong> ${formData.school}</p>
                <!-- Add other form fields as needed -->
            </div>
        `;
        showModal(modalContent);
    }
}

function showModal(content) {
    const modal = document.createElement('div');
    modal.classList.add('modal');
    modal.innerHTML = content;
    document.body.appendChild(modal);
}

function closeProfileModal() {
    const modal = document.querySelector('.modal');
    modal.parentNode.removeChild(modal);
}


document.addEventListener('DOMContentLoaded', function() {
    const profileIcon = document.querySelector('.profile-icon img');
    profileIcon.addEventListener('click', showProfileDetails);
});

const scrollButton = document.getElementById('scroll-btn');
const loginLink = document.getElementById('login-link');
const loginModal = document.getElementById('login-modal');
const closeBtn = document.getElementById('close-btn');
let isAtBottom = false;

function updateScrollIcon() {
    if (window.scrollY + window.innerHeight >= document.body.scrollHeight - 10) {
        scrollButton.innerHTML = '<img src="Images used/uparrow.png" alt="Scroll Up" />';
        isAtBottom = true;
    } else if (window.scrollY <= 10) {
        scrollButton.innerHTML = '<img src="Images used/downarrow.png" alt="Scroll Down" />';
        isAtBottom = false;
    }
}

