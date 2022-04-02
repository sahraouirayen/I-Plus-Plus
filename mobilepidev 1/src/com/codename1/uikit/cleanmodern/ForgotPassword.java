/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.FloatingHint;
import com.codename1.components.ToastBar;
import com.codename1.io.CharArrayReader;
import com.codename1.io.JSONParser;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;
import static com.codename1.uikit.cleanmodern.CleanModern.verificationcode;
import static com.codename1.uikit.cleanmodern.CleanModern.verificationemail;
import com.codename1.uikit.cleanmodern.entities.User;
import com.codename1.uikit.cleanmodern.services.ServiceUser;
import com.codename1.uikit.cleanmodern.utils.SessionManager;
import java.io.IOException;
import java.util.Map;
import java.util.Random;

/**
 * Sign in UI
 *
 * @author Shai Almog
 */
public class ForgotPassword extends BaseForm {

    public ForgotPassword(Resources res) {
        super(new BorderLayout());

        if (!Display.getInstance().isTablet()) {
            BorderLayout bl = (BorderLayout) getLayout();
            bl.defineLandscapeSwap(BorderLayout.NORTH, BorderLayout.EAST);
            bl.defineLandscapeSwap(BorderLayout.SOUTH, BorderLayout.CENTER);
        }
        getTitleArea().setUIID("Container");
        setUIID("SignIn");

        add(BorderLayout.NORTH, new Label(res.getImage("Logo.png"), "LogoLabel"));

        TextField email = new TextField("", "Username", 20, TextField.ANY);
        email.setSingleLineTextArea(false);
        Button reset = new Button("Valider");
        Button signIn = new Button("Sign In");
        Button signUp = new Button("Sign Up");
        signUp.addActionListener(e -> new SignUpForm(res).show());
        signIn.addActionListener(e -> new SignInForm(res).show());
        signUp.setUIID("Link");
        signIn.setUIID("Link");
        Label doneHaveAnAccount = new Label("Don't have an account?");
        Label alreadHaveAnAccount = new Label("Already have an account?");

        Container content = BoxLayout.encloseY(
                new FloatingHint(email),
                createLineSeparator(),
                reset
        );
        content.setScrollableY(true);
        add(BorderLayout.CENTER, content);
        add(BorderLayout.SOUTH, BoxLayout.encloseY(
                FlowLayout.encloseCenter(alreadHaveAnAccount, signIn),
                FlowLayout.encloseCenter(doneHaveAnAccount, signUp)
        ));

        reset.requestFocus();
        reset.addActionListener(e -> {
            if ((email.getText().length() == 0)) {
                Dialog.show("Alert", "Veuillez remplir tous les champs", new Command("OK"));
            } else {
                Random rand = new Random();
                int randomCode = rand.nextInt(999999);
                CleanModern.verificationcode = randomCode;
                CleanModern.verificationemail = email.getText();
                User user;
                user = ServiceUser.getInstance().forgottenpass(email.getText());
                if (user == null) {
                    ToastBar.showMessage("Probleme  user not found", FontImage.MATERIAL_INFO);
                } else {
                    ToastBar.showMessage(" user  found", FontImage.MATERIAL_INFO);
                    CleanModern.Resetuser = user;
                    ServiceUser.getInstance().sendEmail(verificationemail, verificationcode);
                    ToastBar.showMessage("Verification code was sent to your email", FontImage.MATERIAL_INFO);
                    new VerifierCodeForm(res).show();

                }

            }

        });
    }

}
