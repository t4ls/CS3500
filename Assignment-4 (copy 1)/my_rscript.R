# my_rscript.R
 
args <- commandArgs(TRUE)
 
N <- args[1]
x <- rnorm(N,0,1)
 
png(filename="../Assignment-4/temp.png", width=500, height=500)
plot(x,  type="o", col="blue")
dev.off()
