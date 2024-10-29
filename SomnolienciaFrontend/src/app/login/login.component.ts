import { Component, ElementRef, ViewChild } from '@angular/core';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  @ViewChild('passwordInputAccess') passwordInputAccess!: ElementRef;
  @ViewChild('passwordEyeAccess') passwordEyeAccess!: ElementRef;
  @ViewChild('passwordInputRegister') passwordInputRegister!: ElementRef;
  @ViewChild('passwordEyeRegister') passwordEyeRegister!: ElementRef;
  @ViewChild('loginAccessRegister') loginAccessRegister!: ElementRef;

  togglePasswordVisibility(input: ElementRef, eyeIcon: ElementRef) {
    const inputElement = input.nativeElement as HTMLInputElement;
    const iconElement = eyeIcon.nativeElement as HTMLElement;

    // Toggle input type
    inputElement.type = inputElement.type === 'password' ? 'text' : 'password';

    // Toggle icon classes
    iconElement.classList.toggle('ri-eye-fill');
    iconElement.classList.toggle('ri-eye-off-fill');
  }

  showRegisterForm() {
    this.loginAccessRegister.nativeElement.classList.add('active');
  }

  showLoginForm() {
    this.loginAccessRegister.nativeElement.classList.remove('active');
  }
}
