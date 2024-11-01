import { Component, ElementRef, ViewChild, OnInit } from '@angular/core';
import { SocialAuthService, SocialUser } from '@abacritt/angularx-social-login';
import { GoogleLoginProvider } from '@abacritt/angularx-social-login';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
  @ViewChild('passwordInputAccess') passwordInputAccess!: ElementRef;
  @ViewChild('passwordEyeAccess') passwordEyeAccess!: ElementRef;
  @ViewChild('passwordInputRegister') passwordInputRegister!: ElementRef;
  @ViewChild('passwordEyeRegister') passwordEyeRegister!: ElementRef;
  @ViewChild('loginAccessRegister') loginAccessRegister!: ElementRef;

  user: SocialUser | undefined;
  loggedIn: boolean = false;

  constructor(private authService: SocialAuthService) {}

  ngOnInit() {
    this.authService.authState.subscribe((user) => {
      this.user = user;
      this.loggedIn = user != null;
    });
  }

  // Método para iniciar sesión con Google
  signInWithGoogle(): void {
    this.authService.signIn(GoogleLoginProvider.PROVIDER_ID);
  }

  // Método para cerrar sesión
  signOut(): void {
    this.authService.signOut();
  }

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
