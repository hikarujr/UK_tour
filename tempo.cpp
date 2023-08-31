#include<stdio.h>
#include<string.h>
#include<iostream>

using namespace std;
int p=0;
class Tempo{
    private:
    char temponame[5],driver[10],arrival[5],depart[5],from[10],to[10],seat[8][4][10];
    public:
    void addnewtempo();// to add new tempos
    void reservation();

}tempo[25];//total 25 tempos

void Tempo::addnewtempo(){
    cout<<"enter bus number:";
    cin>>tempo[p].temponame;
    cout<<"driver name:";
     cin>>tempo[p].driver;
     cout<<"arrival time :";
      cin>>tempo[p].arrival;
      cout<<"deaprture :";
       cin>>tempo[p].depart;
       cout<<"enter from:";
        cin>>tempo[p].from;
        cout<<"enter to:";
         cin>>tempo[p].to;
          

}


void Tempo::reservation(){
    int seat;
    char number[5];

    top://
    cout<<"enter tempo number:";
    cin>>number;
    for(int i=0;i<=p;i++)
    {
        if(strcmp(tempo[i].temponame,number)==0)
        break;
    }
    while(i<=p){
        cout<<"enter seat number :";
        cin>>seat;
        if(seat>)
    }

}

