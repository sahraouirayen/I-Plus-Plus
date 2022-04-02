/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.services;

import com.codename1.components.ToastBar;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.AdminForm;
import com.codename1.uikit.cleanmodern.ListActualiteForm;
import com.codename1.uikit.cleanmodern.NewsfeedForm;
import com.codename1.uikit.cleanmodern.entities.User;
import com.codename1.uikit.cleanmodern.utils.SessionManager;
import com.codename1.uikit.cleanmodern.utils.Statics;
import com.sun.mail.smtp.SMTPTransport;
import java.io.IOException;
import java.io.UnsupportedEncodingException;
import java.util.Date;
import java.util.List;
import java.util.Map;
import java.util.Properties;
import javax.mail.Message;
import javax.mail.Session;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

/**
 *
 * @author 21695
 */
public class ServiceUser {

    private Resources theme;

    public static ServiceUser instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
    String json;
    public User utilisateur = new User();

    public ServiceUser() {
        req = new ConnectionRequest();
    }

    public static ServiceUser getInstance() {
        if (instance == null) {
            instance = new ServiceUser();
        }
        return instance;
    }

    public User forgottenpass(String email) {

        String url = Statics.BASE_URL + "motpasseoublie";
        req.setUrl(url);
        req.setPost(false);
        req.addArgument("email", email);
        JSONParser j = new JSONParser();

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                json = new String(req.getResponseData());
                int json1 = req.getResponseData().length;
                if (25 >= json1) {
                    Dialog.show("verification", "User not found", "OK", null);
                } else {
                    System.out.println("++++++++>>>>>>  " + json);

                    try {
                        Map<String, Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                        List<Map<String, Object>> list = (List<Map<String, Object>>) user.get("root");
                        float userid = Float.parseFloat(user.get("idUser").toString());
                        int id = (int) userid;
                        System.out.println("useeeeeeeer " + user.get("resetToken"));
                        utilisateur.setEmail((String) user.get("email"));
                        utilisateur.setId(id);
                        utilisateur.setNom((String) user.get("nom"));
                        utilisateur.setPrenom((String) user.get("prenom"));
//                        utilisateur.setNumTel((int) user.get("numTel"));
                        Dialog.show("verification", "Verification code was sent to your email", "OK", null);

                    } catch (IOException ex) {
                        System.out.println(ex.getMessage());
                    }

                }

                req.removeResponseListener(this);

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return utilisateur;
    }

    public boolean inscription(User u) {
        System.out.println(u);
        System.out.println("********");
        //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
        String url = Statics.BASE_URL + "inscription";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("nom", u.getNom());
        req.addArgument("prenom", u.getPrenom());
        req.addArgument("email", u.getEmail());
        req.addArgument("pass", u.getPassword());
        req.addArgument("numTel", u.getNumTel() + "");
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean edituser(String id, String nom, String prenom, String email, String numTel, String adresse) {

        String url = Statics.BASE_URL + "edit-user";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("id", id);
        req.addArgument("nom", nom);
        req.addArgument("prenom", prenom);
        req.addArgument("email", email);
        req.addArgument("numTel", numTel + "");

        req.addArgument("adresse", adresse);
        JSONParser j = new JSONParser();

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                json = new String(req.getResponseData());
                int json1 = req.getResponseData().length;

                if (25 >= json1) {
                    Dialog.show("Echec", "User not found", "OK", null);
                } else {
                    System.out.println("++++++++>>>>>>  " + json);

                    try {
                        Map<String, Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                        List<Map<String, Object>> list = (List<Map<String, Object>>) user.get("root");
                        System.out.println("useeeeeeeer " + user.get("resetToken"));

                        Dialog.show("Succes", "Modification avec succes", "OK", null);

                    } catch (IOException ex) {
                        System.out.println(ex.getMessage());
                    }

                }
                req.removeResponseListener(this);

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public void connexion(String email, String password, Resources res) {

        String url = Statics.BASE_URL + "connexion";
        req.setUrl(url);
        req.setPost(false);
        req.addArgument("email", email);
        req.addArgument("password", password);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser j = new JSONParser();
                int json1 = req.getResponseData().length;

                try {
                    json = new String(req.getResponseData(), "utf-8");
                    System.out.println("++++++++>>>>>>  " + json);
                } catch (UnsupportedEncodingException ex) {
                    System.out.println(ex.getMessage());
                }
                //  System.out.println("------>"+json+"******");
                //  boolean resi=(json.equals(evt)"echec");
                //  System.out.println("response "+resi);
                // System.out.println("response2 "+json.equals("echec"));
                if (json1 < 10) {
                    Dialog.show("Echec d'authentification", "email ou mot de passe est erroné", "OK", null);

                } else {
                    System.out.println("data--->" + json);
                    try {
                        Map<String, Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                        List<Map<String, Object>> list = (List<Map<String, Object>>) user.get("root");

                        System.out.println("useeeeeeeer " + list.get(0));
                        for (Map<String, Object> obj : list) {
                            List roles = (List) obj.get("roles");
                            System.out.println(roles.get(0));
                            String role = (String) roles.get(0);
                            float id = Float.parseFloat(obj.get("idUser").toString());
                            SessionManager.setId((int) id);
                            SessionManager.setEmail(obj.get("email").toString());
                            SessionManager.setNom(obj.get("nom").toString());
                            SessionManager.setPrénom(obj.get("prenom").toString());
                            SessionManager.setRole(role);
                            Double numero = (Double) obj.get("numTel");
                            SessionManager.setNumTel(numero.intValue());
                            if (role.equals("ROLE_SUPER_ADMIN") || role.equals("ROLE_ADMIN")) {
                                new AdminForm(res).show();
                            } else {
                                new ListActualiteForm(res).show();
                            }
                        }
                        System.out.println("user===>" + SessionManager.getEmail());

                    } catch (IOException ex) {
                        System.out.println(ex.getMessage());
                    }
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
    }

    public void deleteuser(String idadmin, String id) {
        //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
        String url = Statics.BASE_URL + "admin/delete-user";
        System.out.println("admin id" + idadmin + "id" + id);
        req.setUrl(url);
        req.setPost(false);
        req.addArgument("adminid", idadmin);
        req.addArgument("id", id);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                int result = req.getResponseCode(); //Code HTTP 200 OK
                if (result == 202) {
                    Dialog.show("Success", "Utilisateur est supprimé", "OK", null);
                    new AdminForm(theme).show();
                } else {
                    Dialog.show("Failed", "Erreur", "OK", null);

                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
    }

    public void editrole(String adminid, String id, String role) {
        String url = Statics.BASE_URL + "admin/edit-user";
        req.setUrl(url);
        req.setPost(false);
        req.addArgument("adminid", adminid);
        req.addArgument("id", id);
        req.addArgument("role", role);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                int result = req.getResponseCode(); //Code HTTP 200 OK
                if (result == 200) {
                    Dialog.show("Success", "Utilisateur est modifié", "OK", null);
                    new AdminForm(theme).show();
                } else {
                    Dialog.show("Failed", "Erreur", "OK", null);

                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }

    public void sendEmail(String email, int code) {
        try {
            Properties props = new Properties();
            props.put("mail.transport.protocol", "smtp");
            props.put("mail.smtps.host", "smtp.gmail.com");
            props.put("mail.smtps.auth", "true");

            Session session = Session.getInstance(props, null);

            MimeMessage msg = new MimeMessage(session);
            msg.setFrom(new InternetAddress("reinitialisation mot de passe  <monEmail@domaine.com>"));
            msg.setRecipients(Message.RecipientType.TO, email);
            msg.setSubject("GAMEWARRIOR reinitialisation mot de passe ");
            msg.setSentDate(new Date(System.currentTimeMillis()));

            String txt = "reinitialisation mot de passe : code de verification : " + code;
            msg.setText(txt);

            SMTPTransport st = (SMTPTransport) session.getTransport("smtps");
            st.connect("smtp.gmail.com", 465, "warriorgame126", "Chaima23912570");

            st.sendMessage(msg, msg.getAllRecipients());
            System.out.println("server response :" );

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public User resetpassword(User Resetuser) {
        String url = Statics.BASE_URL + "resetpassword?id=" + Resetuser.getId() + "&password=" + Resetuser.getPassword();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               
                String res = new String(req.getResponseData());

                json = new String(req.getResponseData());
                int json1 = req.getResponseData().length;
                if (25 >= json1) {
                    Dialog.show("verification", "User not found", "OK", null);
                } else {
                    System.out.println("++++++++>>>>>>  " + json);
                    JSONParser j = new JSONParser();

                    try {
                        Map<String, Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                        List<Map<String, Object>> list = (List<Map<String, Object>>) user.get("root");
                        float userid = Float.parseFloat(user.get("idUser").toString());
                        int id = (int) userid;
                        System.out.println("useeeeeeeer " + user.get("resetToken"));
                        utilisateur.setEmail((String) user.get("email"));
                        utilisateur.setId(id);
                        utilisateur.setNom((String) user.get("nom"));
                        utilisateur.setPrenom((String) user.get("prenom"));
//                        utilisateur.setNumTel((int) user.get("numTel"));
                        Dialog.show("verification", "Verification code was sent to your email", "OK", null);

                    } catch (IOException ex) {
                        System.out.println(ex.getMessage());
                    }

                }

                req.removeResponseListener(this);

            }

        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return utilisateur;

    }

}
