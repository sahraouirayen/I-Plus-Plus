/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.entities;

import java.util.Date;

/**
 *
 * @author karim
 */
public class Evenement {
    private int idEvent;
    private String nomEvent,lieu,descEvent,type;
    private Date date;
    public String getNomEvent;

    public Evenement() {
    
    
    
    }

    
    
    public Evenement(int idEvent, String nomEvent, String lieu, String descEvent, String type, Date date) {
        this.idEvent = idEvent;
        this.nomEvent = nomEvent;
        this.lieu = lieu;
        this.descEvent = descEvent;
        this.type = type;
        this.date = date;
    }

    public Evenement(String nomEvent, String lieu, String descEvent, String type, Date date) {
        this.nomEvent = nomEvent;
        this.lieu = lieu;
        this.descEvent = descEvent;
        this.type = type;
        this.date = date;
    }

    public int getIdEvent() {
        return idEvent;
    }

    public void setIdEvent(int idEvent) {
        this.idEvent = idEvent;
    }

    public String getNomEvent() {
        return nomEvent;
    }

    public void setNomEvent(String nomEvent) {
        this.nomEvent = nomEvent;
    }

    public String getLieu() {
        return lieu;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public String getDescEvent() {
        return descEvent;
    }

    public void setDescEvent(String descEvent) {
        this.descEvent = descEvent;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public String getStatus() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
           
}
