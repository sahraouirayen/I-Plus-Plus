/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.codename1.uikit.cleanmodern.entities.Prod;
import com.codename1.uikit.cleanmodern.utils.Statics;

import java.util.List;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Map;

/**
 *
 * @author MSI
 */
public class Serviceprod {

    public ArrayList<Prod> produits;

    public static Serviceprod instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public Serviceprod() {
        req = new ConnectionRequest();
    }

    public static Serviceprod getInstance() {
        if (instance == null) {
            instance = new Serviceprod();
        }
        return instance;
    }

    public boolean addhotel(Prod t) {
        System.out.println(t);
        System.out.println("********");
        //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
        String url = Statics.BASE_URL + "addprod";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("prix", t.getPrix() + "");
        req.addArgument("nom", t.getNom());
        req.addArgument("status", t.getStatus() + "");
        req.addArgument("rate", t.getRate() + "");
        req.addArgument("des", t.getDesc());
        req.addArgument("cat", t.getCat());

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

    public List<Prod> parsehotel(String jsonText) {
        try {
            System.out.println("prrrrrrrrrrroduct" + jsonText);
            produits = new ArrayList<>();
            JSONParser j = new JSONParser();

            Map<String, Object> hotelListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            System.out.println("prrrrrrrrrrroduct2" + hotelListJson);

            List<Map<String, Object>> list = (List<Map<String, Object>>) hotelListJson.get("root");

            System.out.println("prrrrrrrrrrroduct2=3" + list);

            for (Map<String, Object> obj : list) {

                Prod h = new Prod();
                h.setId(((int) Float.parseFloat(obj.get("id").toString())));
                h.setNom(obj.get("nomProd").toString());
                h.setStatus(Boolean.valueOf(obj.get("statusProd").toString()));
                h.setRate(((int) Float.parseFloat(obj.get("rateProd").toString())));
                h.setDesc(obj.get("descriptionProd").toString());

                h.setCat(obj.get("categorieProd").toString());

                produits.add(h);

            }

        } catch (IOException ex) {

        }
        return produits;
    }

    public ArrayList<Prod> getAllhotels() {
        req = new ConnectionRequest();
        String url = Statics.BASE_URL + "listeprod/";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override

            public void actionPerformed(NetworkEvent evt) {
                produits = (ArrayList<Prod>) parsehotel(new String(req.getResponseData()));

                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

        return produits;
    }

    public void DelPant(int id) {
        ConnectionRequest con = new ConnectionRequest();
        String url = Statics.BASE_URL + "suppprod/" + id;
        con.setUrl(url);
        con.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                con.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
    }

    public boolean modifehotel(Prod t) {
        System.out.println(t);
        System.out.println("********");
        //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
        String url = Statics.BASE_URL + "editprodmob";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("id", t.getId() + "");
        req.addArgument("prix", t.getPrix() + "");
        req.addArgument("nom", t.getNom());
        req.addArgument("status", t.getStatus() + "");
        req.addArgument("rate", t.getRate() + "");
        req.addArgument("desc", t.getDesc());
        req.addArgument("cat", t.getCat());

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
}
