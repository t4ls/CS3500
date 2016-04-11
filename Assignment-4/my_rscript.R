# my_rscript.R
# Rscript my_rscript.R 25 10 500 1 .1 .6 .5 100
library(deSolve)
 
args <- commandArgs(TRUE)

predprey_FuncResp  <- function(t, y, parms) {
    with(as.list(c(y,parms)), {
         dpdt <- (b*a*N*P) - d*P
		 dndt <- r*N*(1-N/k) - (a*N*P)
         return(list(c(dndt, dpdt)))  # dndt <- r*N*(1-N/k) - (s*N*P)/(v+N)
    })
}

N = as.double(args[1]);
P = as.double(args[2]);
k = as.double(args[3]);
r = as.double(args[4]);
a = as.double(args[5]);
d = as.double(args[6]);
b = as.double(args[7]);
Tmax = as.integer(args[8]);

print(typeof(N))
print(typeof(P))
print(typeof(k))
print(typeof(r))
print(typeof(a))
print(typeof(d))
print(typeof(Tmax))





parms <- c(a=a, d=d , r=r, k=k, b=b)
#Tmax = Tmax # time horizon  
TimeStep = 1 # integration time step
Time <- seq(0, Tmax, by = TimeStep)
LV.out <- ode(c(N = N, P = P), Time, predprey_FuncResp,parms)
par(las=1,bty="l")
png(filename="../Assignment-4/temp.png", width=800, height=800)
matplot(LV.out[,1],LV.out[,-1], type='l', main="Predator and Prey Populations over Time", xlab="pp.time", ylab="Population Size")
legend(x="topright",col=c("black","red"),lty=1,legend=c("Prey","Predator"),bty="n",lwd=2)
dev.off()
