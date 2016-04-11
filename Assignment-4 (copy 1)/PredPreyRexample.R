library(deSolve)

parameters<-c(r=1.15,alpha=.01,q=.4)
 state<-c(N=500,P=20)

lvmodel<-function(t,state,parameters){
 with(as.list(c(state,parameters)),{
 #rate of change
 dN<-(r*N)-(alpha*N*P)
 dP<-(alpha*N*P)-(q*P)

list(c(dN,dP))
 })
 }

times<-seq(0,100,by=1)
 out<-ode(y=state,times=times,func=lvmodel,parms=parameters)
 plot(out[,2],out[,3],typ="o",ylab="Predator Abundance",xlab="Prey Abundance")
 abline(v=.4/.01)
 abline(h=1.15/.01)

